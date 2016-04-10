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
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/headers/header-v4.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/blog_magazine.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/page_contact.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">
</head> 

<body>
<div class="wrapper">
    <!--=== Header v4 ===-->    
    <div class="header-v4">
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <h1>
                    <a href="#">
                        珠海智慧驾培
                    </a>
                </h1>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="full-width-menu">珠海智慧驾培系统</span>
                    <span class="icon-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </span>
                </button>
            </div><!--/end container-->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url('/main/goInterface') ?>">首页</a>
                        </li>

                        <li class="dropdown active">
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
                    </ul>
                </div><!--/end container-->
            </div><!--/navbar-collapse-->
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v4 ===-->

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row magazine-page">
            <!-- Begin Content -->
            <div class="col-md-9">
                <!-- Magazine Slider -->
                <div class="carousel slide carousel-v1 margin-bottom-50" id="myCarousel-1">
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

                <!-- Magazine News -->
                <div class="magazine-news">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-block-v1 md-margin-bottom-50">
                                <i class="rounded-x icon-book-open"></i>
                                <h3 class="title-v3-bg text-uppercase">在线报名</h3>
                                <p>进入在线报名操作页面</p>
                                <a class="text-uppercase" href="<?php echo site_url('register/goRegister')?>">点击进入</a>
                            </div>
                        </div>
                        <div class="col-md-6"><div class="service-block-v1 md-margin-bottom-50">
                                <i class="rounded-x icon-film"></i>
                                <h3 class="title-v3-bg text-uppercase">科目一视频培训</h3>
                                <p>进入科目一视频培训页面</p>
                                <a class="text-uppercase" href="#">点击进入</a>
                            </div>  </div>
                    </div>
                </div>
                <!-- End Magazine News -->

                <div class="margin-bottom-35"><hr class="hr-md"></div>
                
                <!-- Magazine News -->
                <div class="magazine-news">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-block-v1 md-margin-bottom-50">
                                <i class="rounded-x icon-screen-desktop"></i>
                                <h3 class="title-v3-bg text-uppercase">网上预约</h3>
                                <p>进入网上预约操作页面</p>
                                <a class="text-uppercase" href="<?php echo site_url('appointment/index')?>">点击进入</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-block-v1 md-margin-bottom-50">
                                <i class="rounded-x icon-star"></i>
                                <h3 class="title-v3-bg text-uppercase">学员评价</h3>
                                <p>进入学员评价操作页面</p>
                                <a class="text-uppercase" href="<?php echo site_url('/evaluate/index')?>">点击进入</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Magazine News -->
            </div>
            <!-- End Content -->

            <!-- Begin Sidebar -->
            <div class="col-md-3">
                <div class="headline" style="margin-top: 0"><h2 class="heading-sm">热点资讯</h2></div>

                <ul class="list-unstyled who margin-bottom-30 news"></ul>
                <div id="myCarousel" class="carousel slide carousel-v1 margin-bottom-30">
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
                <div class="headline"><h2 class="heading-sm">联系方式</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>XX省XX市XX县</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>zhihuijiapei@163.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>13631224755</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.zhuhuijiapei.com</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
        </div>
    </div><!--/container-->     
    <!-- End Content Part -->

    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            2016 &copy; 珠海智慧驾培 All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
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
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();

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
                            '" target="_blank" ><span style="overflow:hidden;white-space:nowrap;display: block;"><i class="glyphicon glyphicon-tags"></i> '+data.data[i]['title']
                            +' </span></a></li>';
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