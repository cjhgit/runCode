<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo ($article->title); ?> - <?php echo ($websiteName); ?></title>
    <link rel="stylesheet" href="/public/asset/css/common.css">
</head>
<body>
<header class="ec-header">
    <ul class="ec-header-menu">
    <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="menu-item">
            <p><a href="<?php echo ($item['url']); ?>"><?php echo ($item['item_name']); ?></a></p>
        </li><?php endforeach; endif; ?>
    </ul>
</header>

<a href="/Article/all">所有文章</a>
<h1><?php echo ($article->title); ?></h1>
<p><?php echo ($article->content); ?></p>

</body>
</html>