<?php
namespace Home\Controller\Common;

use Think\Controller;

class BaseController extends Controller {

    public function hello() {
        echo 'hello';
    }

    public function commonInit() {
        $this->assign('websiteName', '爱闻科技');

        $this->initMenu();
    }

    public function initMenu() {
        $m = M('menu_item');
        $items = $m->where("menu_id = '2' and parent_id = '0'")->order('sort_order')->select();

        $this->assign('items', $items);
    }
}