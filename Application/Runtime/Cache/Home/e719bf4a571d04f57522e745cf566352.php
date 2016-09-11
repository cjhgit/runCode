<?php if (!defined('THINK_PATH')) exit(); $pageId = 'user'; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>runJs - 在线工具</title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
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

<div class="layout-body body-full">
    <div class="layout-left">
        <div class="layout-left-bar">
            <ul class="side-menu top">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
            <ul class="side-menu bottom">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
        <ul class="layout-left-menu">
            <li><a href="#">我的主页</a> </li>
            <li><a href="">我的项目</a> </li>
            <li><a href="">我的收藏</a> </li>
        </ul>
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
<script src="/public/asset/lib/jquery/jquery-1.10.2.min.js"></script>
<script src="/public/asset/lib/eui/eui.min.js"></script>
<script src="/public/asset/lib/codemirror/codemirror.min.js"></script>
<script src="/public/asset/lib/codemirror/htmlmixed.js"></script>
<script src="/public/asset/lib/codemirror/css.js"></script>
<script src="/public/asset/lib/codemirror/javascript.js"></script>
<script src="/public/asset/lib/codemirror/xml.js"></script>
<script src="/public/asset/lib/codemirror/closetag.js"></script>
<script src="/public/asset/lib/codemirror/closebrackets.js"></script>
<!--[if lt IE 9]>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
<script>
    // Define an extended mixed-mode that understands vbscript and
    // leaves mustache/handlebars embedded templates in html mode
    var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{
            matches: /\/x-handlebars-template|\/x-mustache/i,
            mode: null
        },
            {
                matches: /(text|application)\/(x-)?vb(a|script)/i,
                mode: "vbscript"
            }]
    };

    var htmlEditor = CodeMirror.fromTextArea(document.getElementById("html"), {
        mode: 'text/html',
        selectionPointer: true,
        lineNumbers: false,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true
    });
    var javascriptEditor = CodeMirror.fromTextArea(document.getElementById("javascript"), {
        mode: 'text/javascript',
        selectionPointer: true,
        lineNumbers: false,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true
    });
    var cssEditor = CodeMirror.fromTextArea(document.getElementById("css"), {
        mode: 'text/css', /* text/css, text/x-scss (demo), text/x-less (demo). */
        selectionPointer: true,
        lineNumbers: false,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true
    });

    function submitTryit() {
        var html = htmlEditor.getValue();
        var css = cssEditor.getValue();
        var javascript = javascriptEditor.getValue();
        var patternBody = /<body[^>]*>((.|[\n\r])*)<\/body>/im;
        var array_matches_body = patternBody.exec(html);
        //alert(typeof array_matches_body);

        var result = '<html><head><style>' + css + '</style></head><body>'
                + html + '<script>' + javascript + '<\/script>'
                + '</body></html>';

        setOutputValue(result);
    }
    function setOutputValue(val) {
        var ifr = document.createElement("iframe");
        ifr.setAttribute("frameborder", "0");
        ifr.setAttribute("id", "iframeResult");
        document.getElementById("iframewrapper").innerHTML = "";
        document.getElementById("iframewrapper").appendChild(ifr);

        var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
        ifrw.document.open();
        ifrw.document.write(val);
        ifrw.document.close();
    }
    submitTryit();
    document.getElementById('run').onclick = function(e) {
        e.preventDefault();

        submitTryit();
    };
    document.onkeydown = function(e) {
        if (e.ctrlKey && e.which == 13) {
            alert(1);
        }
    }
    document.getElementById('clear').onclick = clear;
    function clear(e) {
        e.preventDefault();

        htmlEditor.setValue('');
        cssEditor.setValue('');
        javascriptEditor.setValue('');
        setOutputValue('');
    }

    document.getElementById('html-tag').onclick = function(e) {
        var el = document.getElementById('html-box');
        el.style.position = 'fixed';
        el.style.top = '0';
        el.style.left = '0';
        el.style.bottom = '0';
        el.style.height = '100%';
        el.style.right = '0';
        el.style.zIndex = 10000;

        alert(el.getAttribute('class'));
    };
    document.getElementById('save').onclick = function() {
        var name = $('#name').val();
        if (!name) {
            eui.msg('项目名称不能为空');
            return;
        }

        var html = htmlEditor.getValue();
        var css = cssEditor.getValue();
        var javascript = javascriptEditor.getValue();

        $.ajax({
            url: '/code/add',
            data: {
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
                    var id = obj.data;
                    setTimeout(function () {
                        window.location.href = '/code/detail?id=' + id;
                    }, 800)
                } else {
                    eui.msg('保存失败，' + obj.msg);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                eui.msg('系统出错');
            }
        });
    };
</script>
</body>
</html>