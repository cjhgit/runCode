<?php
namespace Home\Controller\Common;

use Think\Controller;

class BaseController extends Controller {

    public function hello() {
        echo 'hello';
    }

    public function commonInit() {
        // 获取站点信息
        $m = M('setting');
        $website = $m->field('setting_value')->where("setting_key='websiteName'")->find();
        $this->assign('websiteName', $website['setting_value']);

        // 模拟登陆
        session_start();
        //$_SESSION['uid'] = '1';

        // 判断是否已经登陆
        if (isset($_SESSION['uid'])) {
            $user = $_SESSION['user'];

            $this->assign('isLogin', true);
            $this->assign('username', $user['username']);
            $this->assign('avatar', '/Public/upload/demo/user.jpg');
        } else {
            $this->assign('isLogin', false);
        }

        //$this->initMenu();
    }

    public function initMenu() {
        $m = M('menu_item');
        $items = $m->where("menu_id = '2' and parent_id = '0'")->order('sort_order')->select();

        $this->assign('items', $items);
    }

    public function json($code, $data) {

        
    }
}