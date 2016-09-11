<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>用户详情 - <?php echo ($websiteName); ?></title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
</head>
<body>
<!-- 头部 -->
<header class="layout-header navbar navbar-light navbar-fixed-top">
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
                <li class="nav-item"> <a class="nav-link" href="/code/hot">热门代码</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/editor">编辑器</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($isLogin): ?><li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <img class="avatar avatar-xxs" src="<?php echo ($avatar); ?>">
                            <?php echo ($username); ?> <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/users/${userId}" target="_blank">个人中心</a></li>
                            <li><a href="/code/me">我的代码</a></li>
                            <li><a href="/settings/profile">账号设置</a></li>
                            <li class="divider"></li>
                            <li><a id="loginout" href="/login/loginout">退出登陆</a></li>
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

<div class="layout-body">
    <div class="container">
        <section class="index-section">
            <ul class="fun-list">
                <li class="item">热门</li>
                <li class="item">编辑器</li>
                <li class="item">帮助</li>
            </ul>
        </section>
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">热门代码</h2>
            </header>
            <div class="card-body">
                <ul>
                    <?php if(is_array($codes)): foreach($codes as $key=>$code): ?><li>
                            <div><a href="/code/detail?id=<?php echo ($code["code_id"]); ?>"><?php echo ($code["code_name"]); ?></a></div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </section>
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">活跃用户</h2>
            </header>
            <div class="card-body">
                <a href="/user/detail?id=1">用户一</a>
                <hr>
                <a href="/user/detail?id=2">用户二</a>
            </div>
        </section>
        <section class="card">
            <header class="card-header">
                <h2 class="card-title">大神</h2>
            </header>
            <div class="card-body">
                <a href="/user/detail?id=1">用户一</a>
                <hr>
                <a href="/user/detail?id=2">用户二</a>
            </div>
        </section>
        <!--<p>这是首页</p>
        <a href="/Home/Index/hello">hello</a>
        <p>简短信息</p>
        <a href="/about">关于</a>
        <a href="/article/all">所有文章</a>
        <a href="/article/1">简短文章1</a>
        <a href="/menu">菜单</a>
        <a href="/login">登陆</a>
        <p>访问人数：<?php echo ($visitCount); ?></p>
        <p><a href="/admin/index">管理平台</a></p>
        <p><a href="/upload/">上传页面</a></p>
        <p><a href="/page/md5">md5</a></p>

        <ul class="banner">
            <?php if(is_array($banners)): foreach($banners as $key=>$banner): ?><li>
                    <p><a href="<?php echo ($banner['url']); ?>"><img src="<?php echo ($banner['resource']); ?>"></a></p>
                </li><?php endforeach; endif; ?>
        </ul>
-->
    </div>
</div>


<footer class="layout-footer">
    <div class="container">
        <ul class="footer-nav-list">
            <li><a href="/">首页</a></li>
            <li><a href="/index.php/Home/Index/about">关于我们</a></li>
        </ul>
    </div>
</footer>

<script src="/public/asset/lib/jquery/jquery-1.10.2.min.js"></script>
<script src="/public/asset/lib/eui/eui.min.js"></script>

<script>

</script>
</body>
</html>