<?php

/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/27
 * Time: 11:58
 */
namespace Home\Behavior;

use Think\Behavior;

class TestBehavior extends Behavior {

    public function run(&$param) {
        //记录数据
        $data['client_ip'] = get_client_ip();
        $data['page_view'] = CONTROLLER_NAME.'/'.ACTION_NAME;
        $data['create_time'] = time();
        $data['status'] = 0;
        //echo 'hook test';
        //M('page_view')->add($data);
    }
}