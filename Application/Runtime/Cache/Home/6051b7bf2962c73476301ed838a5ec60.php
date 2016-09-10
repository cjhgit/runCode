<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>注册 - <?php echo ($websiteName); ?></title>
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
                <li class="nav-item"> <a class="nav-link" href="/code/me">我的代码</a> </li>
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
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-4">用户名</label>
                <div class="col-sm-4">
                    <input id="username" class="form-control" placeholder="用户名">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">邮箱</label>
                <div class="col-sm-4">
                    <input id="account" class="form-control" placeholder="邮箱">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">密码</label>
                <div class="col-sm-4">
                    <input id="password" class="form-control" placeholder="密码">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">确认密码</label>
                <div class="col-sm-4">
                    <input id="password2" class="form-control" placeholder="确认密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input id="login" class="btn btn-info" value="注册" type="submit">
                </div>
            </div>
        </form>
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
    $('#login').on('click', function(e) {
        e.preventDefault();

        var username = $('#username').val();
        if (!username) {
            eui.msg('请输入用户名');
            return false;
        }

        var email = $('#account').val();
        if (!email) {
            eui.msg('请输入邮箱');
            return false;
        }

        if (!/^[\w-\.]+@([0-9a-zA-Z-]+\.)+[a-zA-Z]{2,8}$/.test(email)) {
            eui.msg('邮箱格式不正确');
            return false;
        }

        var password = $('#password').val();
        if (!password) {
            eui.msg('请输入密码');
            return false;
        }

        var password2 = $('#password2').val();
        if (!password2) {
            eui.msg('请输入确认密码');
            return false;
        }

        if (password !== password2) {
            eui.msg('两次密码输入不一致');
            return false;
        }

        $.ajax({
            url: '/register/register',
            data: {
                email: email,
                username: username,
                password: password
            },
            type: 'POST',
            dataType: 'json',
            success: function (obj) {
                if (obj.code === 0) {
                    eui.alert('注册成功');
                    setTimeout(function () {
                        window.location.href = '/';
                    }, 800);
                } else {
                    alert('登陆失败，' + obj.data);
                }
            },
            error: function () {
                alert('系统出错');
            }
        });
    });
</script>
</body>
</html>