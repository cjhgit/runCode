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
<ul class="nav nav-tabs">
    <li class="nav-item active"><a class="nav-link" href="#tab11" data-toggle="tab">Result</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab12" data-toggle="tab">Javascript</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab13" data-toggle="tab">HTML</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab14" data-toggle="tab">CSS</a></li>
</ul>
<div class="tab-content">
    <div id="tab11" class="tab-pane fade in active">
        <h3>标题</h3>
        <p>这是结果</p>
    </div>
    <div id="tab12" class="tab-pane fade">
        <div>
            <?php echo ($code["js"]); ?>
        </div>
    </div>
    <div id="tab13" class="tab-pane fade">
        <div>
            <?php echo ($code["html"]); ?>
        </div>
    </div>
    <div id="tab14" class="tab-pane fade">
        <div>
            <?php echo ($code["css"]); ?>
        </div>
    </div>
</div>

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