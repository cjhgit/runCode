<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>文章列表 - 文章网</title>
    <link rel="stylesheet" href="/Public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/Public/asset/css/common.css">
</head>
<body>
<!-- 头部 -->
<header class="navbar navbar-dark bg-primary navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">	 	 <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand"><?php echo ($websiteName); ?></a>
        </div>
        <nav id="navbar-collapse" class="collapse navbar-collapse" role="navigation">
            <form class="navbar-form navbar-left" action="search.html" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索问题、话题或人">
                </div>
                <button type="submit" class="btn btn-primary">搜索</button>
            </form>
            <ul class="nav navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="/">首页</a> </li>
                <?php if($isLogin): ?><li class="nav-item"> <a class="nav-link" href="/users/${userId}/messages" target="_blank">消息</a> </li><?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($isLogin): ?><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <img class="avatar avatar-xxs" src="<?php echo ($avatar); ?>">
                            <?php echo ($username); ?> <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/users/${userId}" target="_blank">个人中心</a></li>
                            <li><a href="/users/${userId}/friends" target="_blank">好友列表</a></li>
                            <li><a href="/settings/profile">账号设置</a></li>
                            <li class="divider"></li>
                            <li><a id="loginout" href="login/loginout">退出登陆</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item"> <a class="link-login nav-link" href="/login">登陆</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/register">注册</a> </li><?php endif; ?>
            </ul>


        </nav>
    </div>
</header>
<!-- /头部 -->
<header class="ec-header">
    <div class="container">
        <ul class="ec-header-menu">
            <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="menu-item">
                    <p><a href="<?php echo ($item['url']); ?>"><?php echo ($item['item_name']); ?></a></p>
                </li><?php endforeach; endif; ?>
        </ul>
    </div>
</header>

<h1>所有文章</h1>
<?php if(is_array($articles)): foreach($articles as $key=>$article): ?><li>
        <p><a href="/article/detail/id/<?php echo ($article['article_id']); ?>"><?php echo ($article['title']); ?></a></p>
    </li><?php endforeach; endif; ?>

</body>
</html>