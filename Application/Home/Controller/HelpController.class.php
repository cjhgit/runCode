<?php
namespace Home\Controller;

use Home\Behavior\TestBehavior;
use Home\Controller\Common\BaseController;
use Think\Hook;

class HelpController extends BaseController {

    public function index() {

        $this->commonInit();
        
        $this->display('Page:help');
    }

}