<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes" />     
    <title>登录</title>
    <link rel="stylesheet" href="assets/p/login/index.css">
    <?php include('script.php'); ?>
</head>
<body>

<!-- 通用头部 -->
<?php include('header.php'); ?>


<div class="main-content">
    <div class="slogan">
        Bilicorn<br>连接投资人和创始人的第一平台
    </div>
    <div class="login-register-box">
        <div class="hd">
            <a href="login.php" class="login-btn dib active">登录</a>
            <a href="register.php" class="register-btn dib ">注册新用户</a>
        </div>
        <div class="login-bd">
            <input class="ipt" type="text" placeholder="邮箱">
            <input class="ipt" type="password" placeholder="密码（6位以上数字或字母）">
            <div class="operate clearfix">
                <label class="fl" for="remember-pwd">
                    <input type="checkbox" id="remember-pwd" class="dib">
                    <span class="dib">记住我</span>
                </label>
                <span class="tips J_ContactManager hide">直接联系管理员许高<i class="arrow"></i></span>
                
                <span class="forget-pwd fr J_ForgetPwd">忘记密码</span>
            </div>
            <button type="submit" >登 录</button>
        </div>

    </div>
</div>



<?php include('footer.php'); ?>

<script>
    seajs.use('p/login/index.js');
</script>
</body>

</html>