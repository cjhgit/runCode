<?php
namespace Home\Controller;

use Home\Behavior\TestBehavior;
use Home\Controller\Common\BaseController;
use Think\Hook;

class UController extends BaseController {

    public function index() {

        $this->commonInit();
        
        $this->display('Page:user');
    }

    public function detail($id) {
        $this->commonInit();

        $m = M('user');
        $user = $m->where("user_id = '$id'")->find();

        if ($user == null) {
            $this->error('找不到用户');
        }

        $this->assign('user', $user);

        $this->display('Page:user_detail');
    }
}