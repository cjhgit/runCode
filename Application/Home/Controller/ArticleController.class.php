<?php
/**
 * Created by PhpStorm.
 * User: cjh1
 * Date: 2016/7/7
 * Time: 20:03
 */
namespace Home\Controller;

use Home\Controller\Common\BaseController;

class ArticleController extends BaseController {

    public function index(){
        $this->commonInit();

        echo 'article';
    }

    public function detail($id) {
        $this->commonInit();
        
        $article = M('article');
        $article->where("article_id = '$id'")->find();

        if ($article == null) {
            $this->error('找不到文章');
        }

        $this->assign('article', $article);

        $this->display();
    }

}