<?php
namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use app\model\SuricataLog;

class ImportLog extends Command
{
    protected function configure()
    {
        $this->setName('import:suricata')->setDescription('Import Suricata logs');
    }

    protected function execute(Input $input, Output $output)
    {
        $filePath = '/var/log/suricata/eve.json';  // 替换为实际路径

        // 逐行读取文件
        $handle = fopen($filePath, 'r');
        if (!$handle) {
            $output->writeln('无法打开文件');
            return;
        }

        $batchSize = 100;  // 每批插入100条
        $dataBuffer = [];

        while (!feof($handle)) {
            $line = fgets($handle);
            if (empty($line)) continue;

            try {
                $logData = json_decode($line, true, 512, JSON_THROW_ON_ERROR);

                // 提取字段（根据实际JSON结构调整）
                $data = [
                    'timestamp'      => date('Y-m-d H:i:s', strtotime($logData['timestamp'])),
                    'event_type'     => $logData['event_type'] ?? '',
                    'src_ip'         => $logData['src_ip'] ?? '',
                    'dest_ip'        => $logData['dest_ip'] ?? '',
                    'src_port'       => $logData['src_port'] ?? 0,
                    'dest_port'      => $logData['dest_port'] ?? 0,
                    'proto'          => $logData['proto'] ?? '',
                    'alert_category' => $logData['alert']['category'] ?? '',
                    'alert_severity' => $logData['alert']['severity'] ?? 0,
                    'json_data'      => $logData,
                ];

                $dataBuffer[] = $data;

                // 批量插入
                if (count($dataBuffer) >= $batchSize) {
                    SuricataLog::insertAll($dataBuffer);
                    $dataBuffer = [];
                    $output->writeln('已插入 ' . $batchSize . ' 条日志');
                }

            } catch (\JsonException $e) {
                $output->writeln('JSON解析错误: ' . $e->getMessage());
            } catch (\Exception $e) {
                $output->writeln('错误: ' . $e->getMessage());
            }
        }

        // 插入剩余数据
        if (!empty($dataBuffer)) {
            SuricataLog::insertAll($dataBuffer);
            $output->writeln('已插入剩余 ' . count($dataBuffer) . ' 条日志');
        }

        fclose($handle);
        $output->writeln('导入完成');
    }
}