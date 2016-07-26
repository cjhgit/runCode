<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo ($websiteName); ?></title>
    <link rel="stylesheet" href="/public/asset/css/common.css">
    <style></style>
</head>
<body>
<header class="ec-header">
    <ul class="ec-header-menu">
    <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="menu-item">
            <p><a href="<?php echo ($item['url']); ?>"><?php echo ($item['item_name']); ?></a></p>
        </li><?php endforeach; endif; ?>
    </ul>
</header>

<p>这是首页</p>
<a href="/Home/Index/hello">hello</a>
<p>简短信息</p>
<a href="/about">关于</a>
<a href="/Article/all">所有文章</a>
<a href="/article/1">简短文章1</a>
<a href="/Menu">菜单</a>
<footer class="ec-footer">
    <ul>
        <li><a href="/">首页</a></li>
        <li><a href="/index.php/Home/Index/about">关于我们</a></li>
    </ul>
</footer>

<script></script>
</body>
</html>