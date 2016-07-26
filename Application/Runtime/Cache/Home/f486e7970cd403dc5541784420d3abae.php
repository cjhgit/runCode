<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title></title>
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

<p>这是菜单页面</p>



<footer class="ec-footer">
    <ul>
        <li><a href="/">首页</a></li>
        <li><a href="/index.php/Home/Index/about">关于我们</a></li>
    </ul>
</footer>

<script></script>
</body>
</html>