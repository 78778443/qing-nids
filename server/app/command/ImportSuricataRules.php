<?php
namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use app\model\EtRule;

class ImportSuricataRules extends Command
{
    protected function configure()
    {
        $this->setName('import:suricata-rules')
            ->setDescription('将Suricata ET规则导入数据库');
    }

    protected function execute(Input $input, Output $output)
    {
        // 规则文件路径（请替换为实际路径）
//        $ruleFilePath = '/path/to/emerging-all.rules'; // 例如：/var/www/nids/rules/emerging-all.rules
//        $ruleFilePath = 'https://rules.emergingthreats.net/open/suricata-7.0.3/emerging-all.rules'; // 例如：/var/www/nids/rules/emerging-all.rules
        $ruleFilePath = './public/emerging-all.rules'; // 例如：/var/www/nids/rules/emerging-all.rules

        // 读取文件内容
        $lines = file($ruleFilePath);
        if (!$lines) {
            $output->error("规则文件不存在或不可读");
            return;
        }

        $successCount = 0;
        $errorCount = 0;

        foreach ($lines as $line) {
            $line = trim($line);
            // 跳过注释行和空行
            if (empty($line) || $line[0] == '#') {
                continue;
            }

            try {
                // 解析单条规则
                $parsedData = $this->parseSingleRule($line);
                // 使用ThinkPHP模型插入（自动去重，根据sid+rev）

                // 替换为查询存在性后保存
                $record = EtRule::where([
                    'sid' => $parsedData['sid'],
                    'rev' => $parsedData['rev']
                ])->find();
                if ($record) {
                    $record->data($parsedData)->save();
                } else {
                    $record = new EtRule();
                    $record->data($parsedData)->save();
                }
                $successCount++;
                $output->writeln("成功导入：SID {$parsedData['sid']} (版本 {$parsedData['rev']})");
            } catch (\Exception $e) {
                $errorCount++;
                $output->error("解析失败：{$line} - 错误信息：{$e->getMessage()}");
            }
        }

        $output->info("\n导入完成！成功：{$successCount} 条，失败：{$errorCount} 条");
    }

    /**
     * 解析单条规则文本
     * @param string $rule 原始规则文本
     * @return array 解析后的数组
     */
    private function parseSingleRule(string $rule): array
    {
        // 基础匹配：提取动作、协议、源、目标、选项
        if (!preg_match('/^(?<action>\w+)\s+(?<protocol>\w+)\s+(?<source>[^->]+)\s+->\s+(?<destination>[^()]+)\s+\((?<options>.*)\)$/', $rule, $matches)) {
            throw new \Exception("规则格式错误，无法解析基础结构");
        }

        $options = trim($matches['options'], ';'); // 移除末尾分号
        $optionArray = array_filter(explode(';', $options), fn($v) => !empty(trim($v))); // 分割选项并过滤空值

        $parsed = [
            'action' => $matches['action'],
            'protocol' => $matches['protocol'],
            'source' => trim($matches['source']),
            'destination' => trim($matches['destination']),
            'raw_rule' => $rule,
            'reference' => [], // 初始化引用数组
            'metadata' => [] // 初始化元数据数组
        ];

        foreach ($optionArray as $option) {
            $option = trim($option);
            // 解析msg
            if (preg_match('/^msg:"(?<msg>.*)"$/', $option, $m)) {
                $parsed['msg'] = $m['msg'];
            }
            // 解析content
            elseif (preg_match('/^content:"(?<content>.*)"$/', $option, $m)) {
                $parsed['content'] = $m['content'];
            }
            // 解析reference（支持多个，如 url,xxx; cve,xxx）
            elseif (preg_match('/^reference:(?<type>\w+),(?<value>.*)$/', $option, $m)) {
                $parsed['reference'][] = ['type' => $m['type'], 'value' => $m['value']];
            }
            // 解析classtype
            elseif (preg_match('/^classtype:(?<classtype>.*)$/', $option, $m)) {
                $parsed['classtype'] = $m['classtype'];
            }
            // 解析sid和rev
            elseif (preg_match('/^sid:(?<sid>\d+)$/', $option, $m)) {
                $parsed['sid'] = $m['sid'];
            } elseif (preg_match('/^rev:(?<rev>\d+)$/', $option, $m)) {
                $parsed['rev'] = (int)$m['rev'];
            }
            // 解析metadata（键值对，如 created_at 2010_07_30, confidence High）
            elseif (str_starts_with($option, 'metadata:')) {
                $metadataStr = substr($option, 8); // 去掉metadata:前缀
                $metadataItems = array_map('trim', explode(',', $metadataStr));
                foreach ($metadataItems as $item) {
                    if (str_contains($item, ' ')) {
                        list($key, $value) = explode(' ', $item, 2);
                        $parsed['metadata'][$key] = $value;
                    }
                }
            }
        }

        // 验证必填字段（sid和rev必须存在）
        if (!isset($parsed['sid']) || !isset($parsed['rev'])) {
            throw new \Exception("缺少必填字段sid或rev");
        }

        // 转换为JSON格式（ThinkPHP模型会自动处理JSON字段）
        $parsed['reference'] = json_encode($parsed['reference']);
        $parsed['metadata'] = json_encode($parsed['metadata']);

        return $parsed;
    }
}