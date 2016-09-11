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
        body {
            padding-top: 50px;
        }
    </style>
    <style>
        <?php echo ($code["css"]); ?>
    </style>
</head>
<body>
<div id="view-top" class="view-top">
    <a class="code-name" href="/code/detail?id=<?php echo ($code['code_id']); ?>"><?php echo ($code['code_name']); ?></a>
    <a id="close-view" class="close-icon" href="#"><i class="icon icon-close"></i></a>
</div>
<?php echo ($code["html"]); ?>
<script>
    <?php echo ($code["js"]); ?>
</script>
<script src="/public/asset/lib/jquery/jquery-1.10.2.min.js"></script>
<script src="/public/asset/lib/eui/eui.min.js"></script>
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
    $(document).ready(function () {
        $('#close-view').on('click', function (e) {
            e.preventDefault();

            $('#view-top').hide();
            $(document.body).css('padding-top', '0')
        }) ;
    });
</script>
</body>
</html>