<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class RegisterController extends BaseController {

    public function index(){
        $this->CommonInit();

        $this->display('Page:register');
    }

    public function register(){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($username)) {
            $arr['code'] = 1;
            $arr['data'] = '用户名不能为空';
            $this->ajaxReturn($arr, 'JSON');
        }

        if (empty($email)) {
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
        $condition['email'] = $email;
        $ret = $m->field('user_id,password')->where($condition)->find();
        if ($ret) {
            $arr['code'] = 1;
            $arr['data'] = '邮箱已被注册';
            $this->ajaxReturn($arr, 'JSON');
        }

        $data["user_id"] = time();
        $data["username"] = $username;
        $data["password"] = $encodePwd;
        $data["email"] = $email;
        // 写入数据
        if ($lastInsId = $m->add($data)){
            // 注册后自动登陆
            $_SESSION['uid'] = $data["user_id"];
            $_SESSION['user'] = $data;
            
            $arr['code'] = 0;
            $arr['data'] = $encodePwd;
            $this->ajaxReturn($arr, 'JSON');
        } else {
            $arr['code'] = 1;
            $arr['data'] = '注册失败';
            $this->ajaxReturn($arr, 'JSON');
        }


    }

    public function loginout() {
        session_start();
        $_SESSION['uid'] = null;

        $this->redirect('/login');
    }
}