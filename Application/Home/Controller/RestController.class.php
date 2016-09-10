<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;
use Think\Controller\RestController;

class MenuController extends RestController {

    public function test(){
        switch ($this->_method){
            case 'get': // get请求处理代码
                if ($this->_type == 'html'){
                }elseif($this->_type == 'xml'){
                }
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }

}