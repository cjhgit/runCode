<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>基本信息</title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
</head>
<body>
<div class="container">
    <h2>服务器基本信息</h2>
    <table class="table">
        <tr>
            <th>名称</th>
            <th>值</th>
        </tr>
        <tr>
            <td>服务器</td>
            <td><?php echo ($server); ?></td>
        </tr>
        <tr>
            <td>系统</td>
            <td><?php echo ($system); ?></td>
        </tr>
        <tr>
            <td>PHP版本</td>
            <td><?php echo ($phpVersion); ?></td>
        </tr>
        <tr>
            <td>数据库类型</td>
            <td><?php echo ($dbType); ?></td>
        </tr>
        <tr>
            <td>服务器IP</td>
            <td><?php echo ($ip); ?></td>
        </tr>
    </table>

    <h2>其他信息</h2>
    <p>总访问数：</p>
</div>


<footer class="ec-footer">
    <div class="container">
        <ul>
            <li><a href="/Admin/Index">管理平台首页</a></li>
            <li><a href="/">首页</a></li>
        </ul>
    </div>
</footer>

<script></script>
</body>
</html>