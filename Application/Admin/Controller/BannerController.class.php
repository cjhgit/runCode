<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Admin\Controller;

use Home\Controller\Common\BaseController;

class BannerController extends BaseController {

    public function index(){
        // 横幅信息
        $m = M('banner');
        $banners = $m->order('sort_order')->select();
        $this->assign('banners', $banners);

        $this->display();
    }
}
