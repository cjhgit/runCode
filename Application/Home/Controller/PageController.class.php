<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class PageController extends BaseController {

    public function md5(){
        $this->initMenu();

        $this->display();
    }

    public function rsa(){
        $this->initMenu();

        $this->display();
    }

}