<?php
namespace app\model;

use think\Model;

class SuricataLog extends Model
{
    protected $name = 'suricata_logs';  // 表名
    protected $json = ['json_data'];   // 自动处理JSON字段

    // 允许批量赋值的字段
    protected $schema = [
        'timestamp'       => 'datetime',
        'event_type'      => 'string',
        'src_ip'          => 'string',
        'dest_ip'         => 'string',
        'src_port'        => 'int',
        'dest_port'       => 'int',
        'proto'           => 'string',
        'alert_category'  => 'string',
        'alert_severity'  => 'int',
        'json_data'       => 'json',
    ];
}