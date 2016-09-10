<?php
namespace Home\Controller;

use Home\Behavior\TestBehavior;
use Home\Controller\Common\BaseController;
use Think\Hook;

class CodeController extends BaseController {

    public function detail($id) {

        $this->commonInit();
        
        $m = M('code');
        $code = $m->where("code_id = '$id'")->find();

        if ($code == null) {
            $this->error('找不到代码');
        }

        $this->assign('code', $code);

        $test['a'] = $code['user_id'];
        $this->assign('test', $test);

        if ($code['user_id'] == $_SESSION['uid']) {
            $this->assign('self', 'true');
        } else {
            $this->assign('self', 'false');
        }


        $this->display('Page:code_detail');
    }
    
    public function hot() {
        $this->commonInit();

        $m = M('code');
        $codes = $m->select();
        //dump($articles);
        //echo $articles[0]['title'];
        $this->assign('codes', $codes);

        $this->display('Page:code_hot');
    }

    public function me() {
        $this->commonInit();

        if (!isset($_SESSION['uid'])) {
            $this->error('请先登录');
        }

        $m = M('code');
        $where['user_id'] = $_SESSION['uid'];
        $codes = $m->where($where)->select();
        //dump($articles);
        //echo $articles[0]['title'];
        $this->assign('codes', $codes);

        $this->display('Page:code_me');
    }

    public function update() {

        $code['id'] = I('post.id');
        if (empty($code['id'])) {
            $arr['code'] = 1;
            $arr['msg'] = 'id不能为空';
            $this->ajaxReturn($arr, 'JSON');
        }
        $code['html'] = I('post.html');
        $code['js'] = I('post.js');
        $code['css'] = I('post.css');


        $m = M('code');
        $where['code_id'] = $code['id'];
        $codes = $m->where($where)->save($code);

        $arr['code'] = 0;
        $arr['msg'] = 'id不能为空';
        $this->ajaxReturn($arr, 'JSON');
    }
}