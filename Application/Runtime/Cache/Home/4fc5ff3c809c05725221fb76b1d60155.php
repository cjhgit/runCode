<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章列表 - 文章网</title>
</head>
<body>
<header class="ec-header">
    <ul class="ec-header-menu">
    <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="menu-item">
            <p><a href="<?php echo ($item['url']); ?>"><?php echo ($item['item_name']); ?></a></p>
        </li><?php endforeach; endif; ?>
    </ul>
</header>

<h1>所有文章</h1>
<?php if(is_array($articles)): foreach($articles as $key=>$article): ?><li>
        <p><a href="/Article/detail/id/<?php echo ($article['article_id']); ?>"><?php echo ($article['title']); ?></a></p>
    </li><?php endforeach; endif; ?>

</body>
</html>