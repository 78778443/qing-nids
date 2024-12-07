<?php

namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        // 使用视图输出过滤
        return View::fetch();
    }

    public function host_list()
    {
        // 使用视图输出过滤
        return View::fetch();
    }

    public function alert_list()
    {
        // 使用视图输出过滤
        return View::fetch();
    }

    public function system_setting()
    {
        // 使用视图输出过滤
        return View::fetch();
    }


    public function bug_list()
    {
        // 使用视图输出过滤
        return View::fetch();
    }
    public function logaudit_list()
    {
        // 使用视图输出过滤
        return View::fetch();
    }

}
