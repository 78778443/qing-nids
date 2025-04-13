<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
return [
    // 指令定义
    'commands' => [
        'logs' => 'app\command\ImportLog', // 导入Suricata日志流量
        'import:suricata-rules' => 'app\command\ImportSuricataRules',  // 导入Suricata ET规则
        'pipei' => 'app\command\MatchAttackEvents',
    ],
];
