<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes" />     
    <title>注册新用户</title>
    <link rel="stylesheet" href="assets/p/login/index.css">
</head>
<body>

<!-- 通用头部 -->
<?php include('header.php'); ?>


<div class="main-content">
    <div class="slogan">
        Bilicorn<br>连接投资人和创始人的第一平台
    </div>
    <div class="login-register-box register">
        <div class="hd">
            <a href="login.php" class="login-btn dib">登录</a>
            <a href="register.php" class="register-btn dib active">注册新用户</a>
        </div>
        <div class="register-bd">
            <input class="ipt ipt-name dib" type="text" placeholder="请输入姓名">
            <input class="ipt ipt-position dib" type="text" placeholder="请输入职位">
            <input class="ipt" type="text" placeholder="请输入投资机构">
            <input class="ipt" type="text" placeholder="请输入手机号码">
            <input class="ipt" type="text" placeholder="请输入办公邮箱">
            <input class="ipt" type="text" placeholder="微信号">
            <input class="ipt" type="password" placeholder="登录密码">
            <input class="ipt" type="password" placeholder="重新输入密码">
            <div class="ipt upload-card">
                <span>上传个人名片</span>
                <a href="javascript:;" class="up-button fr">
                    点击上传
                    <input type="file" value="点击上传">
                </a>
            </div>
            <button type="submit" >注 册</button>
        </div>

    </div>
</div>



<?php include('footer.php'); ?>
</body>

</html>