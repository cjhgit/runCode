<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class LoginController extends BaseController {

    public function index(){
        $this->CommonInit();

        $this->display('Page:login');
    }

    public function login(){



        $account = $_POST['account'];
        $password = $_POST['password'];

        if (empty($account)) {
            $arr['code'] = 1;
            $arr['data'] = '账号不能为空';
            $this->ajaxReturn($arr, 'JSON');
        }

        if (empty($password)) {
            $arr['code'] = 1;
            $arr['data'] = '密码不能为空';
            $this->ajaxReturn($arr, 'JSON');
        }

        $salt = '&%#@?$%)@%($)#_$)*';
        $encodePwd = md5($password + $salt);



        $m = M('user');
        $condition['email'] = $account;
        $condition['password'] = $encodePwd;
        $ret = $m->where($condition)->find(); // ->field('user_id,password')
        if (!$ret) {
            $arr['code'] = 1;
            $arr['data'] = '用户名不存在或密码出错';
            $this->ajaxReturn($arr, 'JSON');
        }

        $_SESSION['uid'] = $ret['user_id'];
        $_SESSION['user'] = $ret;

        $arr['code'] = 0;
        $arr['data'] = $encodePwd;
        $this->ajaxReturn($arr, 'JSON');
    }

    public function loginout() {
        session_start();
        $_SESSION['uid'] = null;

        $this->redirect('/login');
    }
}