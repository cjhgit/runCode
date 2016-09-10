<?php
namespace Admin\Controller;

use Home\Behavior\TestBehavior;
use Home\Controller\Common\BaseController;
use Think\Hook;

/**
 * 管理平台首页
 * Class IndexController
 * @package Home\Controller
 */
class IndexController extends BaseController {

    public function index() {

        // 测试
        Hook::add('mark_pv', 'Home\Behavior\TestBehavior');
        hook::listen('mark_pv');

        $this->commonInit();

        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $User = M('User','other_','mysql://root:123456@localhost/eschool#utf8');
        echo $User->$hehe;

        //确定导航栏的选中状态
        $nav_active = M()->query('select * from eb_user where user_id = "1"');

        //echo print_r($User);
        //echo '呵呵' . $nav_active[0]['email'];

        // 统计访问人数
        session_start();
        if (isset($_SESSION['views'])) {
            $_SESSION['views'] = $_SESSION['views'] + 1;
        } else {
            $_SESSION['views'] = 1;
        }
        $this->assign('visitCount', $_SESSION['views']);

        $this->display();
    }

    public function hehe(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function hello(){
        echo 'hello,thinkphp!';
    }

    public function about(){
        $this->assign('text', '这是关于页面的信息啊啊啊');
        $this->display();
    }

    public function asd(){
        $this->display();
    }
}