<?php
namespace app\model;

use think\Model;

class AttackEvent extends Model
{
    protected $table = 'attack_events';
    
    protected $schema = [
        'id' => 'int',
        'log_id' => 'int',
        'rule_id' => 'int',
        'event_time' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}