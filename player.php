<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>找赛道 - 运动员</title>
    <link rel="stylesheet" href="assets/p/player/index.css">
    <?php include('script.php'); ?>
</head>
<body>

<!-- 通用头部 -->
<?php include('header.php'); ?>


<div class="main-content">
    <div class="slogan">
        Bilicorn<br>连接投资人和创始人的第一平台
    </div>
    <div class="content">
        <!-- 分类  通用样式 common.scss -->
        <div class="category">
            <!-- 主分类 和 主分类的排序 -->
            <div class="main-cate-wrap clearfix">
                <ul class="main-cate fl clearfix">
                    <li class="item fl active" data-cateId="">所有赛道 (1080)</li>
                    <li class="item fl" data-cateId="">我的赛道</li>
                    <li class="item fl" data-cateId="">我关注的赛道</li>
                </ul>
            </div>
                
            <!-- 次级分类 -->
            <div class="secondary-cate">
                <div class="secondary-cate-content">
                    <!-- 次级分类列表 -->
                    <div class="secondary-cate-wrap">
                        <span class="secondary-name fl">行业</span>
                        <ul class="secondary-cate-list clearfix">
                            <li class="secondary-cate-item fl" data-secId="">全部</li>
                            <li class="secondary-cate-item fl active" data-secId="">金融</li>
                            <li class="secondary-cate-item fl" data-secId="">电商</li>
                            <li class="secondary-cate-item fl" data-secId="">消费</li>
                            <li class="secondary-cate-item fl" data-secId="">B2B</li>
                            <li class="secondary-cate-item fl" data-secId="">旅游</li>
                            <li class="secondary-cate-item fl" data-secId="">物流</li>
                            <li class="secondary-cate-item fl" data-secId="">农业</li>
                            <li class="secondary-cate-item fl" data-secId="">游戏</li>
                            <li class="secondary-cate-item fl" data-secId="">媒体</li>
                            <li class="secondary-cate-item fl" data-secId="">广告营销</li>
                            <li class="secondary-cate-item fl" data-secId="">体育健身</li>
                            <li class="secondary-cate-item fl" data-secId="">企业服务</li>
                            <li class="secondary-cate-item fl" data-secId="">教育培训</li>
                            <li class="secondary-cate-item fl" data-secId="">房产家居</li>
                            <li class="secondary-cate-item fl" data-secId="">医疗健康</li>
                            <li class="secondary-cate-item fl" data-secId="">汽车交通</li>
                            <li class="secondary-cate-item fl" data-secId="">硬件制造</li>
                            <li class="secondary-cate-item fl" data-secId="">工具软件</li>
                            <li class="secondary-cate-item fl" data-secId="">社交社区</li>
                            <li class="secondary-cate-item fl" data-secId="">环保节能</li>
                            <li class="secondary-cate-item fl" data-secId="">文化娱乐内容</li>
                            <li class="secondary-cate-item fl" data-secId="">本地生活O2O</li>
                            <li class="secondary-cate-item fl" data-secId="">移动互联网</li>
                        </ul>
                    </div>
                    <!-- 次级分类的子类列表 -->
                    <div class="sec-cate-son-wrap">
                        <ul class="sec-cate-son-list clearfix">
                            <li class="sec-cate-son-item fl">全部</li>
                            <li class="sec-cate-son-item fl">P2P&借贷</li>
                            <li class="sec-cate-son-item fl">消费金融</li>
                            <li class="sec-cate-son-item fl">供应链金融</li>
                            <li class="sec-cate-son-item fl">投资理财</li>
                            <li class="sec-cate-son-item fl">支付</li>
                            <li class="sec-cate-son-item fl">众筹</li>
                            <li class="sec-cate-son-item fl">金融科技</li>
                            <li class="sec-cate-son-item fl active">移动金融</li>
                            <li class="sec-cate-son-item fl">证券</li>
                            <li class="sec-cate-son-item fl">期货</li>
                            <li class="sec-cate-son-item fl">外汇</li>
                            <li class="sec-cate-son-item fl">贵金属</li>
                            <li class="sec-cate-son-item fl">虚拟货币</li>
                            <li class="sec-cate-son-item fl active">区块链</li>
                            <li class="sec-cate-son-item fl">金融媒体及社区</li>
                            <li class="sec-cate-son-item fl">其他金融服务</li>
                        </ul>
                    </div>
                </div>

                <div class="secondary-cate-content hide">
                    <!-- 次级分类列表 -->
                    <div class="secondary-cate-wrap">
                        <span class="secondary-name fl">行业</span>
                        <ul class="secondary-cate-list clearfix">
                            <li class="secondary-cate-item fl" data-secId="">全部</li>
                            <li class="secondary-cate-item fl" data-secId="">金融</li>
                            <li class="secondary-cate-item fl" data-secId="">电商</li>
                            <li class="secondary-cate-item fl" data-secId="">消费</li>
                            <li class="secondary-cate-item fl" data-secId="">B2B</li>
                            <li class="secondary-cate-item fl" data-secId="">旅游</li>
                            <li class="secondary-cate-item fl active" data-secId="">物流</li>
                            <li class="secondary-cate-item fl" data-secId="">农业</li>
                            <li class="secondary-cate-item fl" data-secId="">游戏</li>
                            <li class="secondary-cate-item fl" data-secId="">媒体</li>
                            <li class="secondary-cate-item fl" data-secId="">广告营销</li>
                            <li class="secondary-cate-item fl" data-secId="">体育健身</li>
                            <li class="secondary-cate-item fl" data-secId="">企业服务</li>
                            <li class="secondary-cate-item fl" data-secId="">教育培训</li>
                            <li class="secondary-cate-item fl" data-secId="">房产家居</li>
                            <li class="secondary-cate-item fl" data-secId="">医疗健康</li>
                            <li class="secondary-cate-item fl" data-secId="">汽车交通</li>
                            <li class="secondary-cate-item fl" data-secId="">硬件制造</li>
                            <li class="secondary-cate-item fl" data-secId="">工具软件</li>
                            <li class="secondary-cate-item fl" data-secId="">社交社区</li>
                            <li class="secondary-cate-item fl" data-secId="">环保节能</li>
                            <li class="secondary-cate-item fl" data-secId="">文化娱乐内容</li>
                            <li class="secondary-cate-item fl" data-secId="">本地生活O2O</li>
                            <li class="secondary-cate-item fl" data-secId="">移动互联网</li>
                        </ul>
                    </div>
                    <!-- 次级分类的子类列表 -->
                    <div class="sec-cate-son-wrap">
                        <ul class="sec-cate-son-list clearfix">
                            <li class="sec-cate-son-item fl">全部</li>
                            <li class="sec-cate-son-item fl">P2P&借贷</li>
                            <li class="sec-cate-son-item fl active">消费金融</li>
                            <li class="sec-cate-son-item fl">供应链金融</li>
                            <li class="sec-cate-son-item fl">投资理财</li>
                            <li class="sec-cate-son-item fl">支付</li>
                            <li class="sec-cate-son-item fl active">众筹</li>
                            <li class="sec-cate-son-item fl active">金融科技</li>
                            <li class="sec-cate-son-item fl active">移动金融</li>
                            <li class="sec-cate-son-item fl">证券</li>
                            <li class="sec-cate-son-item fl">期货</li>
                            <li class="sec-cate-son-item fl">外汇</li>
                            <li class="sec-cate-son-item fl">贵金属</li>
                            <li class="sec-cate-son-item fl">虚拟货币</li>
                            <li class="sec-cate-son-item fl">区块链</li>
                            <li class="sec-cate-son-item fl">金融媒体及社区</li>
                            <li class="sec-cate-son-item fl">其他金融服务</li>
                        </ul>
                    </div>
                </div>

                <div class="secondary-cate-content hide">
                    <!-- 次级分类列表 -->
                    <div class="secondary-cate-wrap">
                        <span class="secondary-name fl">行业</span>
                        <ul class="secondary-cate-list clearfix">
                            <li class="secondary-cate-item fl" data-secId="">全部</li>
                            <li class="secondary-cate-item fl" data-secId="">金融</li>
                            <li class="secondary-cate-item fl" data-secId="">电商</li>
                            <li class="secondary-cate-item fl" data-secId="">消费</li>
                            <li class="secondary-cate-item fl" data-secId="">B2B</li>
                            <li class="secondary-cate-item fl" data-secId="">旅游</li>
                            <li class="secondary-cate-item fl" data-secId="">物流</li>
                            <li class="secondary-cate-item fl" data-secId="">农业</li>
                            <li class="secondary-cate-item fl" data-secId="">游戏</li>
                            <li class="secondary-cate-item fl" data-secId="">媒体</li>
                            <li class="secondary-cate-item fl" data-secId="">广告营销</li>
                            <li class="secondary-cate-item fl" data-secId="">体育健身</li>
                            <li class="secondary-cate-item fl" data-secId="">企业服务</li>
                            <li class="secondary-cate-item fl" data-secId="">教育培训</li>
                            <li class="secondary-cate-item fl" data-secId="">房产家居</li>
                            <li class="secondary-cate-item fl" data-secId="">医疗健康</li>
                            <li class="secondary-cate-item fl" data-secId="">汽车交通</li>
                            <li class="secondary-cate-item fl" data-secId="">硬件制造</li>
                            <li class="secondary-cate-item fl active" data-secId="">工具软件</li>
                            <li class="secondary-cate-item fl" data-secId="">社交社区</li>
                            <li class="secondary-cate-item fl" data-secId="">环保节能</li>
                            <li class="secondary-cate-item fl" data-secId="">文化娱乐内容</li>
                            <li class="secondary-cate-item fl" data-secId="">本地生活O2O</li>
                            <li class="secondary-cate-item fl" data-secId="">移动互联网</li>
                        </ul>
                    </div>
                    <!-- 次级分类的子类列表 -->
                    <div class="sec-cate-son-wrap">
                        <ul class="sec-cate-son-list clearfix">
                            <li class="sec-cate-son-item fl">全部</li>
                            <li class="sec-cate-son-item fl">P2P&借贷</li>
                            <li class="sec-cate-son-item fl">消费金融</li>
                            <li class="sec-cate-son-item fl">供应链金融</li>
                            <li class="sec-cate-son-item fl">投资理财</li>
                            <li class="sec-cate-son-item fl">支付</li>
                            <li class="sec-cate-son-item fl">众筹</li>
                            <li class="sec-cate-son-item fl">金融科技</li>
                            <li class="sec-cate-son-item fl">移动金融</li>
                            <li class="sec-cate-son-item fl">证券</li>
                            <li class="sec-cate-son-item fl active">期货</li>
                            <li class="sec-cate-son-item fl">外汇</li>
                            <li class="sec-cate-son-item fl">贵金属</li>
                            <li class="sec-cate-son-item fl">虚拟货币</li>
                            <li class="sec-cate-son-item fl">区块链</li>
                            <li class="sec-cate-son-item fl">金融媒体及社区</li>
                            <li class="sec-cate-son-item fl">其他金融服务</li>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>

        <!-- mini赛道列表 -->
        <div class="mini-roads clearfix">
            <div class="slide-btns">
                <a href="" class="slide-prev dib"><</a>
                <a href="" class="slide-next dib disable">></a>
            </div>
            <ul class="mini-road-list clearfix fl">
                <li class="mini-r-item fl active">
                    <p class="r-name">大学分期乐</p>
                    <div class="r-players clearfix">
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">五一贷</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">大力税手</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">拓训网</p>
                        </a>

                    </div>
                    <div class="r-btns">
                        <a href="" class="favor dib J_FocusRoad"><i class="icon focus-normal"></i>关注</a>
                        <a href="" class="add-player dib">增加运动员</a>
                    </div>
                </li>
                <li class="mini-r-item fl">
                    <p class="r-name">大学分期乐</p>
                    <div class="r-players clearfix">
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">五一贷</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">大力税手</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">拓训网</p>
                        </a>

                    </div>
                    <div class="r-btns">
                        <a href="" class="favor dib J_FocusRoad"><i class="icon focus-active"></i>关注</a>
                        <a href="" class="add-player dib">增加运动员</a>
                    </div>
                </li>
                <li class="mini-r-item fl">
                    <p class="r-name">大学分期乐</p>
                    <div class="r-players clearfix">
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">五一贷</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">大力税手</p>
                        </a>
                        <a class="r-players-item fl">
                            <img class="r-player-img" src="http://temp.im/80x80/f60/fff">
                            <p class="r-player-name">拓训网</p>
                        </a>

                    </div>
                    <div class="r-btns">
                        <a href="" class="favor dib J_FocusRoad"><i class="icon focus-normal"></i>关注</a>
                        <a href="" class="add-player dib">增加运动员</a>
                    </div>
                </li>

            </ul>

            <a href="" class="add-road fl">
                <img src="assets/pic/add@2x.png"><br>
                增加赛道
            </a>
        </div>
        

        <!-- 项目列表 -->
        <div class="project-list">
            <?php 
            for ($x=0; $x<3; $x++) {
              include('project_item.html');
            } 
            ?>
        </div>

        <?php if(isset($_GET['login']) && $_GET['login']==1){?>
        <!-- 分页 -->
        <div class="pages">
            <a href="" class="page prev disable"><<</a>
            <a href="" class="page current">1</a>
            <a href="" class="page">2</a>
            <a href="" class="page">3</a>
            <a href="" class="page">4</a>
            <a href="" class="page">5</a>
            <a href="" class="page">6</a>
            <a href="" class="page next">>></a>
        </div>
        <?php }else{?>
        <p class="project-notlogin-tips">呈现15个周一更新的企业，查看更多请<a href="reigister.php">注册</a></p>
        <?php } ?>
    </div>
</div>



<?php include('footer.php'); ?>
<script>
    seajs.use('p/player/index.js');
</script>
</body>

</html>