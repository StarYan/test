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

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/page_log_reg_v1.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">
</head> 

<body>
<div class="wrapper">
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
                            <li class="active"><a href="<?php echo site_url('/evaluate/index')?>">学员评价</a></li>
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
    <!--=== End Header ===-->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">学员评价登录</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="<?php echo site_url('/main/goMain')?>">学车入口</a></li>
                <li><a href="<?php echo site_url('/evaluate/index')?>">学员评价</a></li>
                <li class="active">登录</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">		
    	<div class="row margin-bottom-20">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page"  method="post" action="<?php echo site_url('/evaluate/login')?>">
                    <div class="reg-header">            
                        <h2>登录账号</h2>
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="用户名" name="nickname" class="form-control" required>
                    </div>                    
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="用户密码" name="password" class="form-control" required>
                    </div>                    

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn-u pull-right" type="submit">登录</button>
                        </div>
                    </div>

                    <hr>

                    <p>没有账号？ <a class="color-green" href="<?php echo site_url('/register/goRegister')?>">点击这里</a>去注册您的账号吧</p>
                </form>            
            </div>
        </div><!--/row-->
    </div><!--/container-->		
    <!--=== End Content Part ===-->

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
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();      
    });

    <?php if(!empty($flag)){
        echo 'alert("请输入正确的账号或者密码")';
    }?>
</script>
<!--[if lt IE 9]>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/respond.js"></script>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/html5shiv.js"></script>
    <script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 