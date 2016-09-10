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
        $this->initMenu();

        $this->display();
    }
}