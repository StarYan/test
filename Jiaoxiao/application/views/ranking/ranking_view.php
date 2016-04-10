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
                            <li><a href="#">注册驾校</a></li>
                            <li><a href="#">登录驾校</a></li>
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

                    <li class="active">
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
            <h1 class="pull-left">综合排名</h1>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Profile ===-->
    <div class="container  profile margin-top-20">
        <div class="row">
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>驾校通过率排名</h2>
                </div>
                <div id="results2"></div>
                <div class="col-md-12">
                    <button type="button" class="btn-u btn-u-blue btn-block text-center load_more2" id="load_more_button2">查看更多</button>
                    <div class="animation_image2 btn-u btn-u-blue btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                </div>
            </div>
            <div class="margin-bottom-30"></div>

            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>驾校打分排名</h2>
                </div>
                <div id="results1"></div>
                <div class="col-md-12">
                    <button type="button" class="btn-u btn-u-blue btn-block text-center load_more1" id="load_more_button1">查看更多</button>
                    <div class="animation_image1 btn-u btn-u-blue btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                </div>

            </div>
            <div class="margin-bottom-30"></div>

            <!-- Profile Content -->
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>明星教练</h2>
                </div>
                <div class="profile-body margin-bottom-20">
                    <!--Profile Blog-->
                    <div class="row" id="results"></div>
                    <!--/end row-->

                    <button type="button" class="btn-u btn-u-default btn-block text-center load_more" id="load_more_button">查看更多</button>
                    <div class="animation_image btn-u btn-u-default btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- End Profile Content -->
        </div><!--/end row-->
    </div>
    <!--=== End Profile ===-->

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
        App.initScrollBar();
        Datepicker.initDatepicker();
        StyleSwitcher.initStyleSwitcher();


        /*------------coach load more-------------*/
        var track_click = 0; //track user click on "load more" button, righ now it is click
        var total_pages = <?php echo $total_pages;?>;
        $('#results').load("<?php echo site_url('/manage_ranking/fetchPagesByCoach')?>", {'page':track_click}, function() {track_click++;}); //initial data to load
        $(".load_more").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.animation_image').show(); //show loading image
            if(track_click <= total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/manage_ranking/fetchPagesByCoach')?>",
                    {
                        'page': track_click
                    },
                    function(data) {
                        $(".load_more").show(); //bring back load more button
                        $("#results").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
                        //hide loading image
                        $('.animation_image').hide(); //hide loading image once data is received
                        track_click++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".load_more").show(); //bring back load more button
                        $('.animation_image').hide(); //hide loading image once data is received
                    });

                if(track_click >= total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".load_more").attr("disabled", "disabled");
                }
            }
        });
        /*------------coach load more-------------*/


        /*------------pass rate load more-------------*/
        var track_click1 = 0; //track user click on "load more" button, righ now it is click
        var total_pages1 = <?php echo $total_pages1;?>;
        $('#results1').load("<?php echo site_url('/manage_ranking/fetchPagesByPassRate')?>", {'page':track_click1}, function() {track_click1++;}); //initial data to load
        $(".load_more1").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.animation_image1').show(); //show loading image
            if(track_click1 <= total_pages1) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/manage_ranking/fetchPagesByPassRate')?>",
                    {
                        'page': track_click1
                    },
                    function(data) {
                        $(".load_more1").show(); //bring back load more button
                        $("#results1").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#load_more_button1").offset().top}, 500);
                        //hide loading image
                        $('.animation_image1').hide(); //hide loading image once data is received
                        track_click1++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".load_more1").show(); //bring back load more button
                        $('.animation_image1').hide(); //hide loading image once data is received
                    });

                if(track_click1 >= total_pages1-1)
                {
                    //reached end of the page yet? disable load button
                    $(".load_more1").attr("disabled", "disabled");
                }
            }
        });
        /*------------pass rate load more-------------*/

        /*------------score load more-------------*/
        var track_click2 = 0; //track user click on "load more" button, righ now it is click
        var total_pages2 = <?php echo $total_pages2;?>;
        $('#results2').load("<?php echo site_url('/manage_ranking/fetchPagesByScore')?>", {'page':track_click2}, function() {track_click2++;}); //initial data to load
        $(".load_more2").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.animation_image2').show(); //show loading image
            if(track_click2 <= total_pages2) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/manage_ranking/fetchPagesByScore')?>",
                    {
                        'page': track_click2
                    },
                    function(data) {
                        $(".load_more2").show(); //bring back load more button
                        $("#results2").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#load_more_button2").offset().top}, 500);
                        //hide loading image
                        $('.animation_image2').hide(); //hide loading image once data is received
                        track_click2++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".load_more2").show(); //bring back load more button
                        $('.animation_image2').hide(); //hide loading image once data is received
                    });

                if(track_click2 >= total_pages2-1)
                {
                    //reached end of the page yet? disable load button
                    $(".load_more2").attr("disabled", "disabled");
                }
            }
        });
        /*------------score load more-------------*/

    });
</script>
<!--[if lt IE 9]>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/respond.js"></script>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/html5shiv.js"></script>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>