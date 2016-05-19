<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes" />     
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <title>项目管理</title>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="assets/p/find/index.css">
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
            <!-- <div class="main-cate-wrap clearfix">
                <ul class="main-cate fl clearfix">
                    <li class="item fl" data-cateId="">智能推荐</li>
                    <li class="item fl active" data-cateId="">行业</li>
                    <li class="item fl" data-cateId="">所在轮次</li>
                    <li class="item fl" data-cateId="">阶段</li>
                    <li class="item fl" data-cateId="">地区</li>
                    <li class="item fl" data-cateId="">成立时间</li>
                </ul>
                <div class="main-cate-order fr">
                    <span class="active-cate">按成立时间排序</span>
                    <ul class="order-types">
                        <li class="item">按成立时间排序</li>
                        <li class="item">按收录时间排序</li>
                        <li class="item">按模型跑分排序</li>
                    </ul>
                </div>
            </div> -->
                
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
                            <li class="sec-cate-son-item fl active">消费金融</li>
                            <li class="sec-cate-son-item fl">供应链金融</li>
                            <li class="sec-cate-son-item fl">投资理财</li>
                            <li class="sec-cate-son-item fl">支付</li>
                            <li class="sec-cate-son-item fl">众筹</li>
                            <li class="sec-cate-son-item fl">金融科技</li>
                            <li class="sec-cate-son-item fl">移动金融</li>
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


                    <!-- 次级分类列表 -->
                    <div class="secondary-cate-wrap">
                        <span class="secondary-name fl">地区</span>
                        <ul class="secondary-cate-list clearfix">
                            <li class="secondary-cate-item fl" data-secId="">所有地区</li>
                            <li class="secondary-cate-item fl active" data-secId="">北京</li>
                            <li class="secondary-cate-item fl" data-secId="">上海</li>
                            <li class="secondary-cate-item fl" data-secId="">广州</li>
                            <li class="secondary-cate-item fl" data-secId="">武汉</li>
                            <li class="secondary-cate-item fl" data-secId="">其他城市</li>
                        </ul>
                    </div>

                    <!-- 次级分类列表 -->
                    <div class="secondary-cate-wrap">
                        <span class="secondary-name fl">跟进情况</span>
                        <ul class="secondary-cate-list clearfix">
                            <li class="secondary-cate-item fl" data-secId="">优先跟进</li>
                            <li class="secondary-cate-item fl active" data-secId="">需要跟进</li>
                            <li class="secondary-cate-item fl" data-secId="">关注可能机会</li>
                            <li class="secondary-cate-item fl" data-secId="">暂不关注</li>
                            <li class="secondary-cate-item fl" data-secId="">没见过</li>
                            <li class="secondary-cate-item fl" data-secId="">见过</li>
                        </ul>
                    </div>
                </div>

                <!-- 已经选择的次级分类 -->
                <!-- <div class="selected-cate">
                    <span class="sel-item dib">金融<i class="delete-one-item">X</i></span>
                    <span class="sel-item dib">消费金融<i class="delete-one-item">X</i></span>
                    <a href="" class="clear-selected fr">清除筛选</a>
                </div> -->

            </div>
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
    seajs.use('p/manage/index.js');
</script>
</body>

</html>