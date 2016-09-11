<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php echo ($websiteName); ?> - 一段说明文本</title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/lib/eicon/iconfont.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
    <style>
        .banner img {
            width: 100px;
            height: 100px;
        }
    </style>
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
                <li class="nav-item"> <a class="nav-link" href="/activity">活动 <span class="label label-danger">new</span> </a> </li>
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
    <section class="come-on">
        <div class="text1">每天一个Demo，你能坚持多久？</div>
        <div class="text2">坚持了，成功也没想象那么难</div>
        <a class="index-publish" href="">怎么玩代码</a>
    </section>
    <div class="">
        <div class="container">
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
        </div>
    </div>
    <div class="rank-section">
        <div class="container">
            <section class="box box-rank box-comeon">
                <header class="box-header">
                    <h2 class="box-title">坚持榜</h2>
                    <div class="box-sub-title">坚持就是胜利</div>
                </header>
                <div class="box-body">
                    <ul class="comeon-user-list">
                    <?php if(is_array($comeon_users)): foreach($comeon_users as $key=>$user): ?><li class="item">
                            <span class="user-rank <?php if($key < 3): ?>top<?php echo ($key + 1); endif; ?>"><?php echo ($key + 1); ?></span>
                            <a class="user-name" href="/u/detail?id=<?php echo ($user['user_id']); ?>"><?php echo ($user['username']); ?></a>
                            <span class="user-data"><?php echo ($user['insist_day']); ?> 天</span>
                        </li><?php endforeach; endif; ?>
                    </ul>

                </div>
            </section>
            <section class="box box-rank">
                <header class="box-header">
                    <h2 class="box-title">大神榜</h2>
                    <div class="box-sub-title">其他人都弱爆了</div>
                </header>
                <div class="box-body">
                    <ul class="comeon-user-list">
                        <?php if(is_array($like_users)): foreach($like_users as $key=>$user): ?><li class="item">
                                <span class="user-rank <?php if($key < 3): ?>top<?php echo ($key + 1); endif; ?>"><?php echo ($key + 1); ?></span>
                                <a class="user-name" href="/u/detail?id=<?php echo ($user['user_id']); ?>"><?php echo ($user['username']); ?></a>
                                <span class="user-data"><?php echo ($user['like_count']); ?> 赞</span>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="container">

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