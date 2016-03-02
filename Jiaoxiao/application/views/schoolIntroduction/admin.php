<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>学员评价</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->

    <link rel="stylesheet" href="<?php echo base_url() ?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/flaty-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/component.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap-stars.css">
    <script src="<?php echo base_url() ?>/js/jquery.barrating.js"></script>

    <style>
        .profile-body {
            padding: 20px;
            background: #f7f7f7;
            height: 240px;
        }

        .nav-tabs.nav-justified {
            width: 100%;
        }

        .nav-tabs.nav-justified > li > a {
            margin-bottom: 0;
        }

        .nav-tabs > li > a, .nav-pills > li > a, .nav-tabs.nav-justified > li > a {
            border-radius: 0;
        }

        .tab-v1 .nav-tabs a {
            font-size: 14px;
            padding: 5px 15px;
        }

        p, li, li a, label {
            color: #555;
        }

        .tab-v1 .nav-tabs > .active > a, .tab-v1 .nav-tabs > .active > a:hover, .tab-v1 .nav-tabs > .active > a:focus {
            color: #fff;
            border: solid 1px rgb(88, 177, 252);
            background: rgb(88, 177, 252);
        }

        .tab-v1 .nav-tabs {
            border-bottom: solid 2px rgb(88, 177, 252);
        }

        .tab-v1 .nav-tabs > li > a:hover {
            color: #fff;
            background: rgb(88, 177, 252);
            border: solid 1px rgb(88, 177, 252);
        }

        .tab-v1 {
            margin: 0;
            padding: 0 0 0 20px;

        }

        .profile-edit {
            padding: 10px;
            background: #fff;
            height: 166px;
        }

        .profile-edit > div {
            margin: 5px;
        }

        .profile-edit > div > strong {
            color: rgb(88, 177, 252);
        }

        .profile-edit > form {
            padding: 10px;
        }

        .profile-edit > form > div {
            margin-bottom: 10px;
        }

        .copyright{
            height:50px;
            background-color: white;
            color:black;
            padding:15px;
            font-size: 13px;
        }

        .title {
            border-bottom:1px solid white;
        }

        .friend-link > li{
            padding-left:5px;
        }
        .friend-link > li > h5 >a{
            color:white;
        }

        .navbar{
            height: 270px;
        }


        @media (max-width: 767px) {
            .profile-body {
                padding: 20px;
                background: #f7f7f7;
                height: 480px;
            }
            .tab-v1 {
                margin: 0;
                padding: 0px;

            }
            .profile-edit {
                padding: 0;
                background: #fff;
                height: 166px;
            }

            .profile-edit > div {
                margin: 3px 0 3px 0;
            }

            .profile-edit > form > div {
                margin-bottom: 0;
            }

            .tab-v1 .nav-tabs {
                border: none;
            }

            .navbar{
                height: 70px;
            }
        }
    </style>

</head>
<body>
<!-- BEGIN Navbar -->
<div class="navbar">
    <div class="container ">
        <div class="row col-md-10 col-md-offset-1">
            <div class="col-md-5">
                <a class="navbar-brand" href="#">
                    <h2>
                        <strong>
                            珠海网上驾校
                        </strong>
                    </h2>
                </a>
            </div>

            <div class="col-md-7 hidden-sm hidden-xs">
                <nav style="float: right;">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url('/main/goInterface') ?>"><h4><i class="icon-home"></i> 驾校首页</h4></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('/main/goMain') ?>"><h4><i class="icon-list"></i> 学车流程</h4></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('/school/schoolIntroduction')?>"><h4><i class="icon-file-text"></i> 驾校简介</h4></a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()?>/feedback.html"><h4><i class="icon-phone"></i> 投诉建议</h4></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>


        <div class="row text-center  hidden-xs" style="margin: 8% auto">
            <div style="color: white;">
                <h1><strong>珠海网上驾校欢迎您</strong></h1>
                <br/>

                <p>

                <h2>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</h2></p>
            </div>
        </div>
    </div>

</div>
<!-- END Navbar -->


<!-- 预约内容介绍 -->
<div class="container" style="margin-top: 3%">
        <div class="col-md-10 col-md-offset-1" style="background-color: rgb(88, 177, 252);margin-bottom: 25px;color:white;">
            <h2>驾校简介</h2>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <?php if ($dataSchool): ?>
                <?php foreach ($dataSchool as $school): ?>
                    <div class="profile-body">
                        <div class="col-md-3 text-center" style="background-color: white;height: 200px;padding: 20px">
                            <img src="<?php echo base_url() ?>/uploads/<?php echo $school['school_img']; ?>" style="width: 90%;height: 90%"/>
                            <h4><strong><?php echo $school['school_name']; ?></strong></h4>
                        </div>

                        <div class="tab-v1 col-md-9">
                            <ul class="nav nav-justified nav-tabs">
                                <li class="active"><a class="pull-left">驾校详情</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="profile-edit tab-pane active col-md-3">
                                    <div class="col-xs-12 col-md-12 "><strong>驾校简介：</strong></div>
                                    <div class="col-xs-12 col-md-12 "><p><?php echo $school['school_introduction']; ?></p></div>
                                </div>
                                <div class="profile-edit tab-pane active col-md-9">
                                    <div class="col-xs-12 col-md-4"><strong class="pull-right">驾校地址：</strong></div>
                                    <div class="col-xs-12 col-md-7"><?php echo $school['school_address']; ?></div>
                                    <div class="col-xs-12 col-md-4 "><strong class="pull-right">驾校电话：</strong></div>
                                    <div class="col-xs-12 col-md-7"><?php echo $school['school_tel']; ?></div>
                                    <div class="col-xs-12 col-md-4 "><strong class="pull-right">驾校营业执照：</strong></div>
                                    <div class="col-xs-12 col-md-7"><?php echo $school['licence']; ?></div>
                                    <div class="col-xs-12 col-md-4 "><strong class="pull-right">驾校通过率：</strong></div>
                                    <div class="col-xs-12 col-md-7"><?php echo $school['pass_rate']; ?> %</div>
                                    <div class="col-xs-12 col-md-4 "><strong class="pull-right">驾校分数：</strong></div>
                                    <div class="col-xs-12 col-md-7"><?php echo $school['score']; ?> 分</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="text-center"><?php echo $link;?></div>
        </div>
</div>



<div class="container" style="margin-top: 8%;height: 250px; background-color: rgb(88,177,242);color:white;padding:20px;">
    <div class="row col-md-10 col-md-offset-1">
        <div class="col-xs-12 col-sm-12 col-md-3 company-info">
            <div class="title">
                <h2>联系方式</h2>
            </div>
            <p><h5>驾校地址</h5></p>
            <p><h5><i class="icon-phone"></i> 驾校电话</h5></p>
            <p><h5><i class="icon-print"></i> 驾校传真号</h5></p>
            <p><h5><i class="icon-globe"></i> 驾校网址</h5></p>
            <p><h5><i class="icon-envelope"></i> 驾校邮箱</h5></p>
        </div>

        <div class="col-md-7 company-info hidden-xs hidden-sm " style="float: right">
            <div class="title">
                <h2>友情链接</h2>
            </div>
            <ul class="nav nav-pills friend-link ">
                <li><h5><a href="#"> 百度 |</a></h5></li>
                <li><h5><a href="#"> 腾讯 |</a></h5></li>
                <li><h5><a href="#"> Google |</a></h5></li>
                <li><h5><a href="#"> 新浪微博 |</a></h5></li>
                <li><h5><a href="#"> 新浪微博 |</a></h5></li>
                <li><h5><a href="#"> 新浪微博 |</a></h5></li>
                <li><h5><a href="#"> 新浪微博 |</a></h5></li>
                <li><h5><a href="#"> 新浪微博 |</a></h5></li>
            </ul>
        </div>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
    </div>

</div>

<div class="copyright">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright &copy; 珠海网上驾校</span> |
                <span>京ICP备11008151号</span>
            </div>
        </div>
    </div>
</div>


<div class="md-overlay"></div>
</body>
<!--basic scripts-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url() ?>assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>assets/sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>

<!--flaty scripts-->
<script src="<?php echo base_url() ?>/js/flaty.js"></script>
<script src="<?php echo base_url() ?>/js/classie.js"></script>
<script src="<?php echo base_url() ?>/js/modalEffects.js"></script>
<script src="<?php echo base_url() ?>/js/jquery.barrating.js"></script>

<script>
    $(document).ready(function () {

    });
</script>
</html>
