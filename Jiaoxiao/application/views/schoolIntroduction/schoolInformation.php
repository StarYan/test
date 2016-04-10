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

    <!--=== Interactive Slider ===-->
    <div class="breadcrumbs-v3 img-v4 text-center">
        <div class="container">
            <h1><?php echo $result[0]['school_name']?></h1>
            <p>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</p>
        </div>
    </div>
    <!--=== End Interactive Slider ===-->

    <!--=== Profile ===-->
    <div class="container  profile margin-top-20">
        <div class="row">
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>驾校简介</h2>
                </div>
                <div class="shadow-wrapper">
                    <div class="tag-box tag-box-v1 box-shadow shadow-effect-2">
                        <p><h4><?php echo $result[0]['school_introduction']?></h4></p>
                    </div>
                </div>
            </div>
            <div class="margin-bottom-30"></div>

            <!-- Profile Content -->
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>教练简介</h2>
                </div>
                <div class="profile-body margin-bottom-20">
                    <!--Profile Blog-->
                    <div class="row" id="results-coach"></div>
                    <!--/end row-->
                    <div class="margin-bottom-20"></div>
                    <button type="button" class="btn-u btn-u-default btn-block text-center coach_load_more" id="coach_load_more_button">查看更多教练</button>
                    <div class="coach_animation_image btn-u btn-u-default btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- Profile Content -->

            <!-- Profile Content -->
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>车辆简介</h2>
                </div>
                <div class="profile-body margin-bottom-20">
                    <!--Profile Blog-->
                    <div class="row" id="results-car"></div>
                    <!--/end row-->
                    <div class="margin-bottom-20"></div>
                    <button type="button" class="btn-u btn-u-default btn-block text-center car_load_more" id="car_load_more_button">查看更多车辆</button>
                    <div class="car_animation_image btn-u btn-u-default btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- End Profile Content -->

            <!-- Profile Content -->
            <div class="col-md-12 md-margin-bottom-20">
                <div class="headline">
                    <h2>场地简介</h2>
                </div>
                <div class="profile-body margin-bottom-20">
                    <!--Profile Blog-->
                    <div class="row" id="results-place"></div>
                    <!--/end row-->
                    <div class="margin-bottom-20"></div>
                    <button type="button" class="btn-u btn-u-default btn-block text-center place_load_more" id="place_load_more_button">查看更多场地</button>
                    <div class="place_animation_image btn-u btn-u-default btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- End Profile Content -->

            <!-- Profile Content -->
            <div class="col-md-12 margin-bottom-50">
                <div class="headline">
                    <h2>学员评论</h2>
                </div>
                <div class="profile-body">
                    <!--Profile Blog-->
                    <div class="row" id="results-evaluation"></div>
                    <!--/end row-->

                    <button type="button" class="btn-u btn-u-default btn-block text-center evaluation_load_more" id="evaluation_load_more_button">查看更多评论</button>
                    <div class="evaluation_animation_image btn-u btn-u-default btn-block text-center" style="display:none;"><img src="<?php echo base_url()?>/images/ajax-loader.gif"> 加载中...</div>
                    <!--End Profile Blog-->
                </div>
            </div>
            <!-- End Profile Content -->
        </div><!--/end row-->
    </div>
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


        var school_id=<?php echo $result[0]['id'];?>;
        /*------------coach load more-------------*/
        var coach_track_click = 0; //track user click on "load more" button, righ now it is click
        var coach_total_pages = <?php echo $countCoach;?>;
        $('#results-coach').load("<?php echo site_url('/school/fetchPagesByCoach')?>", {'page':coach_track_click,'id': school_id}, function() {coach_track_click++;}); //initial data to load

        $(".coach_load_more").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.coach_animation_image').show(); //show loading image
            if(coach_track_click <= coach_total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/school/fetchPagesByCoach')?>",
                    {
                        'page': coach_track_click,
                        'id': school_id
                    },
                    function(data) {
                        $(".coach_load_more").show(); //bring back load more button
                        $("#results-coach").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#coach_load_more_button").offset().top-300}, 500);
                        //hide loading image
                        $('.coach_animation_image').hide(); //hide loading image once data is received
                        coach_track_click++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".coach_load_more").show(); //bring back load more button
                        $('.coach_animation_image').hide(); //hide loading image once data is received
                    });

                if(coach_track_click >= coach_total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".coach_load_more").attr("disabled", "disabled");
                }
            }
        });
        /*------------coach load more-------------*/

        /*------------car load more-------------*/
        var car_track_click = 0; //track user click on "load more" button, righ now it is click
        var car_total_pages = <?php echo $countCar;?>;
        $('#results-car').load("<?php echo site_url('/school/fetchPagesByCar')?>", {'page':car_track_click,'id': school_id}, function() {car_track_click++;}); //initial data to load

        $(".car_load_more").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.car_animation_image').show(); //show loading image
            if(car_track_click <= car_total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/school/fetchPagesByCar')?>",
                    {
                        'page': car_track_click,
                        'id': school_id
                    },
                    function(data) {
                        $(".car_load_more").show(); //bring back load more button
                        $("#results-car").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#car_load_more_button").offset().top-300}, 500);
                        //hide loading image
                        $('.car_animation_image').hide(); //hide loading image once data is received
                        car_track_click++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".car_load_more").show(); //bring back load more button
                        $('.car_animation_image').hide(); //hide loading image once data is received
                    });

                if(car_track_click >= car_total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".car_load_more").attr("disabled", "disabled");
                }
            }
        });
        /*------------car load more-------------*/

        /*------------place load more-------------*/
        var place_track_click = 0; //track user click on "load more" button, righ now it is click
        var place_total_pages = <?php echo $countPlace;?>;
        $('#results-place').load("<?php echo site_url('/school/fetchPagesByPlace')?>", {'page':place_track_click,'id': school_id}, function() {place_track_click++;}); //initial data to load

        $(".place_load_more").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.place_animation_image').show(); //show loading image
            if(place_track_click <= place_total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/school/fetchPagesByPlace')?>",
                    {
                        'page': place_track_click,
                        'id': school_id
                    },
                    function(data) {
                        $(".place_load_more").show(); //bring back load more button
                        $("#results-place").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#place_load_more_button").offset().top-300}, 500);
                        //hide loading image
                        $('.place_animation_image').hide(); //hide loading image once data is received
                        place_track_click++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".place_load_more").show(); //bring back load more button
                        $('.place_animation_image').hide(); //hide loading image once data is received
                    });

                if(place_track_click >= place_total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".place_load_more").attr("disabled", "disabled");
                }
            }
        });
        /*------------place load more-------------*/


        /*------------evaluation load more-------------*/
        var evaluation_track_click = 0; //track user click on "load more" button, righ now it is click
        var evaluation_total_pages = <?php echo $countEvaluation;?>;
        $('#results-evaluation').load("<?php echo site_url('/school/fetchPagesByEvaluation')?>", {'page':evaluation_track_click,'id': school_id}, function() {evaluation_track_click++;}); //initial data to load

        $(".evaluation_load_more").click(function () { //user clicks on button
            $(this).hide(); //hide load more button on click
            $('.evaluation_animation_image').show(); //show loading image
            if(evaluation_track_click <= evaluation_total_pages) //make sure user clicks are still less than total pages
            {
                //post page number and load returned data into result element
                $.post("<?php echo site_url('/school/fetchPagesByEvaluation')?>",
                    {
                        'page': evaluation_track_click,
                        'id': school_id
                    },
                    function(data) {
                        $(".evaluation_load_more").show(); //bring back load more button
                        $("#results-evaluation").append(data); //append data received from server
                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#evaluation_load_more_button").offset().top-300}, 500);
                        //hide loading image
                        $('.evaluation_animation_image').hide(); //hide loading image once data is received
                        evaluation_track_click++; //user click increment on load button
                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".evaluation_load_more").show(); //bring back load more button
                        $('.evaluation_animation_image').hide(); //hide loading image once data is received
                    });

                if(evaluation_track_click >= evaluation_total_pages-1)
                {
                    //reached end of the page yet? disable load button
                    $(".evaluation_load_more").attr("disabled", "disabled");
                }
            }
        });
        /*------------evaluation load more-------------*/


    });
</script>
<!--[if lt IE 9]>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/respond.js"></script>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/html5shiv.js"></script>
<script src="<?php echo base_url()?>/unify-v1.7/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>