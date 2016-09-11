<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>代码详情 - <?php echo ($websiteName); ?></title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/lib/eicon/iconfont.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
    <link rel="stylesheet" href="/public/asset/lib/codemirror/codemirror.min.css">
    <link rel="stylesheet" href="/public/asset/css/index2.css">
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
            <button id="run" class="btn btn-success navbar-btn" type="button">运行</button>
            <?php if($self): endif; ?>
            <button id="save" class="btn btn-success navbar-btn" type="button">保存</button>

            <button id="clear" class="btn btn-success navbar-btn">清空</button>
            <a class="btn btn-success" href="/code/view?id=<?php echo ($code['code_id']); ?>" target="_blank">全屏查看</a>
            <a class="btn btn-success" href="/code/embed?id=<?php echo ($code['code_id']); ?>" target="_blank">嵌入</a>
            <ul class="nav navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="/">首页</a> </li>
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
<div class="layout-body body-full">
    <div class="layout-left">
        <?php if($self == 'true'): ?><div>

                <label>项目名称</label>
                <input id="name" class="form-control" value="<?php echo ($code['code_name']); ?>">
                <label>项目介绍</label>
                <input id="desc" class="form-control" value="<?php echo ($code['description']); ?>">
                <label>
                    <input id="preview-in-time" class="" type="checkbox"> 实时预览
                </label>
                <?php
 ?>
            </div>
        <?php else: ?>
            <div>

                <label>项目名称2</label>
                <input id="name" class="form-control" value="<?php echo ($code['code_name']); ?>">
                <label>项目介绍</label>
                <input id="desc" class="form-control" value="<?php echo ($code['description']); ?>">
                <?php
 ?>
            </div><?php endif; ?>

    </div>
    <div class="layout-right">
        <div class="box-html-js">
    <div id="html-box" class="code-box box-html">
        <div id="html-tag" class="code-tag">html</div>
        <?php if(empty($code["html"])): ?><textarea id="html"></textarea>
        <?php else: ?>
            <textarea id="html"><?php echo ($code["html"]); ?></textarea><?php endif; ?>

    </div>
    <div class="code-box box-js">
        <?php if(empty($code["js"])): ?><textarea id="javascript"></textarea>
        <?php else: ?>
            <textarea id="javascript"><?php echo ($code["js"]); ?></textarea><?php endif; ?>

    </div>
</div>
<div class="box-css-view">
    <div class="code-box box-css">
        <?php if(empty($code["css"])): ?><textarea id="css"></textarea>
        <?php else: ?>
            <textarea id="css"><?php echo ($code["css"]); ?></textarea><?php endif; ?>

    </div>
    <div class="code-output" id="iframewrapper">
        <iframe frameborder="0" id="iframeResult"></iframe>
    </div>
</div>
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
<script src="/public/asset/lib/codemirror/codemirror.min.js"></script>
<script src="/public/asset/lib/codemirror/htmlmixed.js"></script>
<script src="/public/asset/lib/codemirror/css.js"></script>
<script src="/public/asset/lib/codemirror/javascript.js"></script>
<script src="/public/asset/lib/codemirror/xml.js"></script>
<script src="/public/asset/lib/codemirror/closetag.js"></script>
<script src="/public/asset/lib/codemirror/closebrackets.js"></script>

<script src="/public/asset/js/common.js"></script>

<script>
    var page = {
        code: {
          id: '<?php echo ($code['code_id']); ?>'
        },
        isSelf: <?php echo ($self); ?>
    }
</script>
<script>

    $('#save').on('click', function () {
        if (!page.isSelf) {
            eui.msg('这不是您的项目，不能保存');
            return;
        }

        var name = $('#name').val();
        if (!name) {
            name = "未命名";
        }
        var html = htmlEditor.getValue();
        var css = cssEditor.getValue();
        var javascript = javascriptEditor.getValue();

        $.ajax({
            url: '/code/update',
            data: {
                id: page.code.id,
                name: name,
                html: html,
                css: css,
                js: javascript
            },
            type: 'POST',
            dataType: 'json',
            success: function (obj) {
                if (obj.code === 0) {
                    eui.msg('保存成功');
                } else {
                    eui.msg('保存失败，' + obj.msg);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                eui.msg('系统出错');
            }
        });
    });
</script>
</body>
</html>