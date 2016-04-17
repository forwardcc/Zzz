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
            <div class="project-item clearfix">
                <div class="proj-img img-wrap fl">
                    <img src="http://temp.im/140x140/f60/fff" alt="">
                </div>
                <div class="proj-desc">
                    <div class="basic-info">
                        <span class="p-name">量化派</span>
                        <span class="p-area">北京&nbsp;&nbsp;|</span>
                        <a href="http://ebaoyang.com.cn" class="p-url" target="_blank">http://ebaoyang.com.cn</a>
                        <span class="p-social">
                            <a href="" data-content=""><i class="icon wechat"></i></a>
                            <a href="" data-content=""><i class="icon weibo"></i></a>
                        </span>
                        <div class="p-media dib">
                            <a href="" target="_blank">
                                <i class="icon lagou"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon kr"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconitjuzi"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconqixinbao"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-tag">
                        <div class="tag-group">
                            <span class="tag-type fl">行业标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">大数据</span>
                                <span class="t-name dib">信用及征信</span>
                                <span class="t-name dib">金融</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">团队标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">Capital One</span>
                                <span class="t-name dib">Google</span>
                                <span class="t-name dib">高盛</span>
                                <span class="t-name dib">百度</span>
                                <span class="t-name dib">腾讯</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">融资标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">在融资</span>
                                <span class="t-name dib">天使轮</span>
                                <span class="t-name dib">A轮</span>
                                <span class="t-name dib">华创资本</span>
                                <span class="t-name dib">王刚天使投资人</span>
                                <span class="t-name dib">梅花天使</span>
                                <span class="t-name dib">创新工场</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">所在赛道</span>
                            <div class="tag-list">
                                <span class="t-name dib">商业地产领域的“爱屋及乌”</span>
                                <span class="t-name dib">从设计师的角度切入的家装平台</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-introduce">
                        京东金融依托京东电商平台十年来积累起来的交易数据记录和信用体系，致力于服务京东全产业链，向企业和消费者，提供融资、理财、支付等各类互联网金融服务。公司日前获得66.5亿元A轮投资。由红杉资本中国基金、嘉实投资和中国太平领投，估值为466.5亿元。公司日前获得红杉66.5亿元A轮投资。由红杉资本中国基金。
                    </div>
                </div>

                <div class="proj-after">
                    <span class="after-txt">
                        项目后续跟进
                    </span>
                    <div class="see-btn dib">
                        <a href="" class="btn dib active">没见过</a>
                        <a href="" class="btn dib">见过</a>
                    </div>
                    <a href="" class="btn dib operate">优先跟进</a>
                    <a href="" class="btn dib operate">需要跟进</a>
                    <a href="" class="btn dib operate">关注可能机会</a>
                    <a href="" class="btn dib operate">暂不关注</a>
                    <a href="" class="btn fr favor"><i class="icon collect"></i>收藏</a>
                </div>
            </div>

            <div class="project-item clearfix">
                <div class="proj-img img-wrap fl">
                    <img src="http://temp.im/140x140/f60/fff" alt="">
                </div>
                <div class="proj-desc">
                    <div class="basic-info">
                        <span class="p-name">量化派</span>
                        <span class="p-area">北京&nbsp;&nbsp;|</span>
                        <a href="http://ebaoyang.com.cn" class="p-url" target="_blank">http://ebaoyang.com.cn</a>
                        <span class="p-social">
                            <a href="" data-content=""><i class="icon wechat"></i></a>
                            <a href="" data-content=""><i class="icon weibo"></i></a>
                        </span>
                        <div class="p-media dib">
                            <a href="" target="_blank">
                                <i class="icon lagou"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon kr"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconitjuzi"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconqixinbao"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-tag">
                        <div class="tag-group">
                            <span class="tag-type fl">行业标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">大数据</span>
                                <span class="t-name dib">信用及征信</span>
                                <span class="t-name dib">金融</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">团队标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">Capital One</span>
                                <span class="t-name dib">Google</span>
                                <span class="t-name dib">高盛</span>
                                <span class="t-name dib">百度</span>
                                <span class="t-name dib">腾讯</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">融资标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">在融资</span>
                                <span class="t-name dib">天使轮</span>
                                <span class="t-name dib">A轮</span>
                                <span class="t-name dib">华创资本</span>
                                <span class="t-name dib">王刚天使投资人</span>
                                <span class="t-name dib">梅花天使</span>
                                <span class="t-name dib">创新工场</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">所在赛道</span>
                            <div class="tag-list">
                                <span class="t-name dib">商业地产领域的“爱屋及乌”</span>
                                <span class="t-name dib">从设计师的角度切入的家装平台</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-introduce">
                        京东金融依托京东电商平台十年来积累起来的交易数据记录和信用体系，致力于服务京东全产业链，向企业和消费者，提供融资、理财、支付等各类互联网金融服务。公司日前获得66.5亿元A轮投资。由红杉资本中国基金、嘉实投资和中国太平领投，估值为466.5亿元。公司日前获得红杉66.5亿元A轮投资。由红杉资本中国基金。
                    </div>
                </div>

                <div class="proj-after">
                    <span class="after-txt">
                        项目后续跟进
                    </span>
                    <div class="see-btn dib">
                        <a href="" class="btn dib active">没见过</a>
                        <a href="" class="btn dib">见过</a>
                    </div>
                    <a href="" class="btn dib operate">优先跟进</a>
                    <a href="" class="btn dib operate">需要跟进</a>
                    <a href="" class="btn dib operate">关注可能机会</a>
                    <a href="" class="btn dib operate">暂不关注</a>
                    <a href="" class="btn fr favor"><i class="icon collect"></i>收藏</a>
                </div>
            </div>

            <div class="project-item clearfix">
                <div class="proj-img img-wrap fl">
                    <img src="http://temp.im/140x140/f60/fff" alt="">
                </div>
                <div class="proj-desc">
                    <div class="basic-info">
                        <span class="p-name">量化派</span>
                        <span class="p-area">北京&nbsp;&nbsp;|</span>
                        <a href="http://ebaoyang.com.cn" class="p-url" target="_blank">http://ebaoyang.com.cn</a>
                        <span class="p-social">
                            <a href="" data-content=""><i class="icon wechat"></i></a>
                            <a href="" data-content=""><i class="icon weibo"></i></a>
                        </span>
                        <div class="p-media dib">
                            <a href="" target="_blank">
                                <i class="icon lagou"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon kr"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconitjuzi"></i>
                            </a>
                            <a href="" target="_blank">
                                <i class="icon iconqixinbao"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-tag">
                        <div class="tag-group">
                            <span class="tag-type fl">行业标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">大数据</span>
                                <span class="t-name dib">信用及征信</span>
                                <span class="t-name dib">金融</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">团队标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">Capital One</span>
                                <span class="t-name dib">Google</span>
                                <span class="t-name dib">高盛</span>
                                <span class="t-name dib">百度</span>
                                <span class="t-name dib">腾讯</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">融资标签</span>
                            <div class="tag-list">
                                <span class="t-name dib">在融资</span>
                                <span class="t-name dib">天使轮</span>
                                <span class="t-name dib">A轮</span>
                                <span class="t-name dib">华创资本</span>
                                <span class="t-name dib">王刚天使投资人</span>
                                <span class="t-name dib">梅花天使</span>
                                <span class="t-name dib">创新工场</span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span class="tag-type fl">所在赛道</span>
                            <div class="tag-list">
                                <span class="t-name dib">商业地产领域的“爱屋及乌”</span>
                                <span class="t-name dib">从设计师的角度切入的家装平台</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-introduce">
                        京东金融依托京东电商平台十年来积累起来的交易数据记录和信用体系，致力于服务京东全产业链，向企业和消费者，提供融资、理财、支付等各类互联网金融服务。公司日前获得66.5亿元A轮投资。由红杉资本中国基金、嘉实投资和中国太平领投，估值为466.5亿元。公司日前获得红杉66.5亿元A轮投资。由红杉资本中国基金。
                    </div>
                </div>

                <div class="proj-after">
                    <span class="after-txt">
                        项目后续跟进
                    </span>
                    <div class="see-btn dib">
                        <a href="" class="btn dib active">没见过</a>
                        <a href="" class="btn dib">见过</a>
                    </div>
                    <a href="" class="btn dib operate">优先跟进</a>
                    <a href="" class="btn dib operate">需要跟进</a>
                    <a href="" class="btn dib operate">关注可能机会</a>
                    <a href="" class="btn dib operate">暂不关注</a>
                    <a href="" class="btn fr favor"><i class="icon collect"></i>收藏</a>
                </div>
            </div>
        </div>

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
    </div>
</div>



<?php include('footer.php'); ?>
</body>

</html>