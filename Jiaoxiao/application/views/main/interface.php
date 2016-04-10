<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>珠海智慧驾培</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">
</head>	

<body class="boxed-layout container">
<div class="wrapper page-option-v1">
    <!--=== Header ===-->    
    <div class="header">
        <div class="container">
            <h1>
                <a href="#">
                    珠海智慧驾培
                </a>
            </h1>
            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo site_url('/main/goInterface') ?>">首页</a>
                    </li>

                    <li class="dropdown">
                        <a href="<?php echo site_url('/main/goMain')?>" class="dropdown-toggle" data-toggle="dropdown">
                            学车入口
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/register/goRegister')?>">在线报名</a></li>
                            <li><a href="#">科目一视频培训</a></li>
                            <li><a href="<?php echo site_url('/appointment/index')?>">网上预约</a></li>
                            <li><a href="<?php echo site_url('/evaluate/index')?>">学员评价</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            驾校入口
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/manage_schoolRegister/goRegister')?>">注册/登录</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            驾校信息
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/school/schoolIntroduction')?>">驾校</a></li>
                            <li><a href="<?php echo site_url('/school/coachIntroduction')?>">教练</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('/manage_ranking/goRanking')?>">综合排名</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>/feedback.html">投诉建议</a>
                    </li>

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <form method="post" action="<?php echo site_url('/main/search')?>">
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="驾校名/教练名" name="searchInfo" />
                                <span class="input-group-btn">
                                    <button class="btn-u searchSchool" type="submit">搜索</button>
                                </span>
                            </div>
                        </div>
                        </form>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    <!--=== Slider ===-->
    <div class="container">
        <div class="row">
            <div class="carousel slide carousel-v1 margin-bottom-40" id="myCarousel-1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="<?php echo base_url()?>/images/bg-img1.png">
                        <div class="carousel-caption">
                            <p>学车报名 送1000元话费</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="<?php echo base_url()?>/images/bg-img1.png">
                        <div class="carousel-caption">
                            <p>学车报名 送1000元话费</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="<?php echo base_url()?>/images/bg-img1.png">
                        <div class="carousel-caption">
                            <p>学车报名 送1000元话费</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="page_home6.html#myCarousel-1" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="page_home6.html#myCarousel-1" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <!-- End Magazine Slider -->
        </div>
    </div>
    <!--=== End Slider ===-->

    <!--=== Service Block ===-->
    <div class="container">
        <div class="row margin-bottom-40">
            <div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
                <a href="<?php echo site_url('/main/goMain')?>"><i class="rounded-x glyphicon glyphicon-road"></i></a>
                <h1 class="title-v3-md text-uppercase margin-bottom-10">学车入口</h1>
                <p>进行网上报名、网上预约和学员评价功能操作.</p>
            </div>
            <div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
                <a href="<?php echo site_url('/manage_schoolRegister/goRegister')?>"><i class="rounded-x glyphicon glyphicon-log-in"></i></a>
                <h2 class="title-v3-md text-uppercase margin-bottom-10">驾校入口</h2>
                <p>进入注册驾校平台.</p>
            </div>
            <div class="col-md-4 content-boxes-v6">
                <a href="<?php echo site_url('/manage_ranking/goRanking')?>"><i class="rounded-x glyphicon glyphicon-cog"></i></a>
                <h2 class="title-v3-md text-uppercase margin-bottom-10">综合排名</h2>
                <p>进入珠海驾校综合排名页面.</p>
            </div>
        </div><!--/row-->

        <!-- Info Blokcs -->
        <div class="margin-bottom-30">
            <!-- Welcome Block -->
            <div class="col-md-12 margin-bottom-60">
                <div class="headline"><h2>热点资讯</h2></div>
                <div class="row">
                    <!-- Latest Shots -->
                    <div class="col-sm-4 col-xs-12">
                        <div id="myCarousel" class="carousel slide carousel-v1">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url()?>/images/news01.jpg" alt="">
                                    <div class="carousel-caption">
                                        <p>不用去驾校：中国将试点小汽车驾驶人自学直考</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url()?>/images/news02.jpg" alt="">
                                    <div class="carousel-caption">
                                        <p>男子花1.5万元驾考作弊 科目一刚开考就被抓</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url()?>/images/news03.jpg" alt="">
                                    <div class="carousel-caption">
                                        <p>驾驶培训教学与考试大纲修改研讨会在北京召开</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-arrow">
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--/col-md-4-->
                    <div class="col-sm-8 col-xs-12">
                        <ul class="list-unstyled margin-bottom-30 news">
                        </ul>
                    </div>
                </div>
            </div><!--/col-md-8-->
        </div>
        <!-- End Info Blokcs -->
    </div><!--/container-->
    <!--=== End Service Block ===-->





    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- 关于我们 -->
                    <div class="col-md-4">
                        <div class="posts">
                            <div class="headline"><h2>关于我们</h2></div>
                            <p>智慧驾校管理系统是一个基于现代电子信息技术面向驾校管理的服务系统。</p>
                            <p>该系统是在传统的驾校管理系统的基础上，以收集信息、处理信息、发布信息、交换信息、分析信息、利用信息为主，为学员、教练和驾校三者提供多样性的服务，从而实现实时性、准确性、高效性和安全性的智慧系统。</p>
                        </div>
                    </div><!--/col-md-3-->  
                    <!-- End 关于我们 -->
                    
                    <!-- Link List -->
                    <div class="col-md-4">
                        <div class="headline"><h2>友情链接</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a target="_blank" href="http://www.baidu.com">百度一下</a><i class="fa fa-angle-right"></i></li>
                            <li><a target="_blank" href="http://www.sina.com.cn/">新浪首页</a><i class="fa fa-angle-right"></i></li>
                            <li><a target="_blank" href="http://www.qq.com/">腾讯网</a><i class="fa fa-angle-right"></i></li>
                            <li><a target="_blank" href="https://www.1688.com/">阿里巴巴</a><i class="fa fa-angle-right"></i></li>
                            <li><a target="_blank" href="http://www.bilibili.com/">哔哩哔哩</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->                    

                    <!-- Address -->
                    <div class="col-md-4 map-img">
                        <div class="headline"><h2>联系我们</h2></div>
                        <address>
                            地址：XX省XX市XX县 <br />
                            联系电话: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div> 
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="page_home11.html#">Privacy Policy</a> | <a href="page_home11.html#">Terms of Service</a>
                        </p>
                    </div>
                </div>
            </div> 
        </div><!--/copyright-->
    </div>     
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/fancy-box.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/revolution-slider.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initParallaxBg();
        FancyBox.initFancybox();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();        
        RevolutionSlider.initRSfullWidth();

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_news/show')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".news").empty();
                if(data.code==0){
                    for (var i = 0; i < 11; i++){
                        var str = '<li><a href="'+data.data[i]['link']+
                            '" target="_blank" ><span>• &nbsp;</span><span> '+data.data[i]['title']
                            +' </span></a><span class="pull-right">'+data.data[i]['create_date']
                            +'</span></li>';
                        $(".news").append(str);
                    }
                }else{
                    alert(data.msg);
                }

            }
        });
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/respond.js"></script>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/html5shiv.js"></script>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>