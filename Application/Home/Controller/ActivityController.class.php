<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class ActivityController extends BaseController {

    public function index(){
        $this->commonInit();

        $this->display('Page:activity');
    }

    public function detail($id) {
        $this->commonInit();

        $this->display();
    }

}