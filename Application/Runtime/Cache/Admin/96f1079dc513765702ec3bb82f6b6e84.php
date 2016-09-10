<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>横幅信息</title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
    <style>
        .banner-img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>横幅信息</h2>
    <table class="table">
        <tr>
            <th>编号</th>
            <th>排序</th>
            <th>图片预览</th>
            <th>图片链接</th>
            <th>跳转链接</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($banners)): foreach($banners as $key=>$banner): ?><tr>
                <td><?php echo ($banner['banner_id']); ?></td>
                <td><?php echo ($banner['sort_order']); ?></td>
                <td><img class="banner-img" src="<?php echo ($banner['resource']); ?>"></td>
                <td><?php echo ($banner['resource']); ?></td>
                <td><?php echo ($banner['url']); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm">修改</a>
                    <a class="btn btn-danger btn-sm">删除</a>
                    <a class="btn btn-info btn-sm">重新上传横幅图片</a>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>

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