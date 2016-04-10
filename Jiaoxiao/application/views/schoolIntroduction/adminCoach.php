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
    <link rel="shortcut icon" href="<?php echo base_url()?>/unify-v1.7/favicon.ico">

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
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/hover-effects/css/custom-hover-effects.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/page_clients.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/profile.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">

    <style>
        .profile .profile-blog img {
            float: left;
            width: 67px;
            height: 67px;
            margin-right: 20px;
        }

        .introduction{
            height: 100px;
            overflow: hidden;
        }
    </style>
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

                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            驾校信息
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/school/schoolIntroduction')?>">驾校</a></li>
                            <li class="active"><a href="<?php echo site_url('/school/coachIntroduction')?>">教练</a></li>
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
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="教练名" id="coach-name">
                                <span class="input-group-btn">
                                    <button class="btn-u searchCoach" type="button">搜索</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs margin-bottom-20">
        <div class="container">
            <h1 class="pull-left">教练简介</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="#">驾校信息</a></li>
                <li><a href="#">教练</a></li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <div class="container profile margin-bottom-50">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>教练信息</h2>
                </div>
                <div class="profile-body margin-bottom-50">

                    <div class="row">
                        <?php if ($dataCoach): ?>
                        <div id="coachInfo">
                            <?php foreach ($dataCoach as $coach): ?>
                            <div class="col-sm-4 padding-bottom-20">
                                <div class="profile-blog">
                                    <img class="rounded-x" src="<?php echo base_url();?>/uploads/<?php echo $coach->img;?>" alt="">
                                    <div class="name-location">
                                        <strong><?php echo $coach->c_name;?></strong>
                                        <span><i class="fa fa-home"></i><a href="#"><?php echo $coach->school_name;?></a></span><br/>
                                        <span><i class="fa fa-tag"></i>资格证号：<?php echo $coach->qualification_certificate ;?></span>
                                    </div>
                                    <div class="clearfix margin-bottom-20"></div>
                                    <hr>
                                    <ul class="list-inline share-list">
                                        <li><i class="fa fa-jpy"></i><a href="#"><?php echo $coach->price;?>/小时</a></li>
                                        <li><i class="fa fa-group"></i><a href="#"><?php echo $coach->student_num;?>名</a></li>
                                        <li><i class="fa fa-phone"></i><a href="#"><?php echo $coach->tel;?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- Pagination -->
                            <div class="text-center margin-bottom-30">
                                <?php echo $link;?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div><!--/col-md-12-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="copyright">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <p>
                            2016 &copy; 珠海智慧驾培 All Rights Reserved.
                            <a href="#">隐私声明</a> | <a href="#">服务条款</a>
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
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/unify-v1.7/assets/js/plugins/style-switcher.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();

        /**
         * 搜索教练信息的ajax
         */
        $(".searchCoach").click(function(){
            var coachName=$("#coach-name").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('/school/coachInfoSearch')?>',
                data: {
                    coach:coachName
                },
                dataType: "json",
                success: function (data) {
                    $("#coachInfo").empty();
                    for(var i=0;i<data.data.length;i++){
                        var str='<div class="col-sm-4 padding-bottom-20">'+
                                '<div class="profile-blog">'+
                                '<img class="rounded-x" src="<?php echo base_url()?>/uploads/'+data.data[i]['img']+'" alt="">'+
                                '<div class="name-location">'+
                                '<strong>'+data.data[i]['c_name']+'</strong>'+
                                '<span><i class="fa fa-home"></i><a href="#">'+data.data[i]['school_name']+'</a></span><br/>'+
                                '<span><i class="fa fa-tag"></i>资格证号：'+data.data[i]['qualification_certificate']+'</span>'+
                                '</div>'+
                                '<div class="clearfix margin-bottom-20"></div>'+
                                '<hr>'+
                                '<ul class="list-inline share-list">'+
                                '<li><i class="fa fa-jpy"></i><a href="#">'+data.data[i]['price']+'/小时</a></li>'+
                                '<li><i class="fa fa-group"></i><a href="#">'+data.data[i]['student_num']+'名</a></li>'+
                                '<li><i class="fa fa-phone"></i><a href="#">'+data.data[i]['tel']+'</a></li>'+
                                '</ul></div></div>';

                        $("#coachInfo").append(str);
                    }

                }
            });
        });

    });
</script>