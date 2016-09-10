<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class UploadController extends BaseController {

    // 上传页面
    public function index(){
        $this->initMenu();

        $this->display();
    }

    // 上传接口
    public function test() {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('txt', 'jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $this->success('上传成功！');
        }
    }
}