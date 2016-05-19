<div class="header">
    <div class="content clearfix">
        <a href="find.php" class="logo fl"></a>
        <div class="menu fl clearfix">
            <a class="item fl <?php if(!isset($_GET['page']) || $_GET['page']=="find"){echo "active";}?>" href="find.php?page=find">发现项目</a>
            <a class="item fl <?php if(isset($_GET['page']) && $_GET['page']=="manage"){echo "active";}?>" href="manage.php?page=manage">项目管理</a>
            <a class="item fl find-road <?php if(isset($_GET['page']) && $_GET['page']=="player"){echo "active";}?>" href="player.php?page=player">找赛道<!-- <img src="assets/pic/beta@2x.png"> --></a>
            <a class="item fl" href="">投资人</a>
        </div>
        <div class="header-right fr">
            <form class="search-form fl" action="">
                <input type="text" class="keywords fl" name="keywords" placeholder="搜索投资人或项目信息">
                <button type="submit" class="submit-btn fl"><i class="icon search"></i></button>
            </form>
            <a href="login.php" class="user-btn fl">登录</a> 
            <a href="register.php" class="user-btn fl">注册</a> 
        </div>
    </div>
</div>