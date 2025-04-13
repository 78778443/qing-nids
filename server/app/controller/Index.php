<?php

namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        //分页查询
//        Db::class::name('suricata_logs')->paginate(10);
        $data = Db::class::name('suricata_logs')->paginate(10);
        return View::fetch('index/index', ['data' => $data]);
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
