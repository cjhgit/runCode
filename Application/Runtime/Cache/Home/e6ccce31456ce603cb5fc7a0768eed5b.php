<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zhcn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>测试 - <?php echo ($websiteName); ?></title>
    <link rel="stylesheet" href="/public/asset/lib/eui/eui.min.css">
<link rel="stylesheet" href="/public/asset/css/common.css">
</head>
<body>
<div class="layout-body" style="background-color: #f00">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" style="background-color: #f90">
                <img src="http://jsrun.net/upload/avatar/18_1472303472458.png">
            </div>
            <div class="col-sm-6" style="background-color: #09f">
                <img src="http://jsrun.net/upload/avatar/18_1472303472458.png">
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6" style="background-color: #f90">列</div>
            <div class="col-sm-6" style="background-color: #09f">
                <img src="http://jsrun.net/upload/avatar/18_1472303472458.png">
                <div>121212</div>
            </div>

        </div>
    </div>
</div>
<script>
    $('#login').on('click', function(e) {
        e.preventDefault();


        var account = $('#account').val();
        if (!account) {
            eui.msg('请输入邮箱');
            return false;
        }

        if (!/^[\w-\.]+@([0-9a-zA-Z-]+\.)+[a-zA-Z]{2,8}$/.test(account)) {
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
                account: account,
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