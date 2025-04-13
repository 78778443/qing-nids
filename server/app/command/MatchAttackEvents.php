<?php
namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use app\model\SuricataLog;
use app\model\EtRule;
use app\model\AttackEvent;
use think\facade\Db;

class MatchAttackEvents extends Command
{
    protected function configure()
    {
        $this->setName('match:attack-events')
            ->setDescription('将HTTP日志与ET规则匹配生成攻击事件');
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln("开始匹配攻击事件...");
        
        // 获取所有HTTP日志（假设event_type字段区分类型）
        $logs = Db::name('suricata_logs')->where('event_type', 'http')->select()->toArray();
        $rules = EtRule::where('protocol', 'http')->select();

        $matchCount = 0;

        foreach ($logs as $log) {
            //将log[json_data]转成数组
            $log['json_data'] = json_decode($log['json_data'], true);

            // 2. 提取日志中的URI（假设日志存储了完整的JSON数据）
            $uri = $log['json_data']['http']['url'];
//            var_dump($uri);
//            exit;

            foreach ($rules as $rule) {
                // 1. 检查协议匹配
                if ($rule->protocol !== 'http') continue;

                // 新增解析所有content指令
                $contents = [];
                preg_match_all('/content:([^\s;]+)/', $rule->raw_rule, $contentMatches);
                $contents = $contentMatches[1] ?? [];

                $matchContent = true;
                foreach ($contents as $contentStr) {
                    $contentStr = trim($contentStr, '"');
                    // 处理十六进制内容
                    if (substr($contentStr, 0, 1) === '|' && substr($contentStr, -1) === '|') {
                        $hexContent = substr($contentStr, 1, -1);
                        $content = hex2bin($hexContent);
                    } else {
                        $content = $contentStr;
                    }
                    if (stripos($uri, $content) === false) {
                        $matchContent = false;
                        break;
                    }
                }

                // 处理PCRE正则表达式
                $matchPcre = false;
                if (preg_match('/pcre:"([^"]+)"/', $rule->raw_rule, $pcreMatches)) {
                    $pcrePattern = $pcreMatches[1]; // 直接使用原始提取的正则表达式内容
                    // 添加错误抑制避免无效正则报错
                    if (@preg_match($pcrePattern, $uri)) {
                        $matchPcre = true;
                    }
                }

                if ($matchContent && $matchPcre) {
                    // 4. 记录攻击事件
                    $attack = new AttackEvent();
                    $attack->log_id = $log['id'];
                    $attack->rule_id = $rule['id'];
                    $attack->event_time = $log['timestamp'];
                    $attack->save();
                    
                    $matchCount++;
                    $output->writeln("匹配成功：日志ID={$log['id']} 规则SID={$rule->sid}");
                }
            }
        }

        $output->info("匹配完成！共检测到 $matchCount 个攻击事件");
    }
}