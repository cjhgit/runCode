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
    <style>
        <?php echo ($code["css"]); ?>
    </style>
</head>
<body>
<?php echo ($code["html"]); ?>
<script>
    <?php echo ($code["js"]); ?>
</script>
</body>
</html>