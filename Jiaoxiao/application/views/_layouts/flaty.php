<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>驾校管理系统</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url()?>css/flaty.css">
        <link rel="stylesheet" href="<?php echo base_url()?>css/flaty-responsive.css">
        <script src="<?php echo base_url()?>js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>js/jquery.form.js"></script>
    </head>
    <body class="skin-blue">
        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="icon-reorder"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="icon-desktop"></i>
                    驾校后台管理
                </small>
            </a>

        </div>
        <!-- END Navbar -->



        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li class="<?php if(!empty($Ranking_class)){echo $Ranking_class;}?>">
                        <a href="<?php echo site_url('manage_ranking/admin/')?>">
                            <i class="icon-star"></i>
                            <span>驾校排名管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($Evaluate_class)){echo $Evaluate_class;}?>">
                        <a href="<?php echo site_url('manage_evaluate/index/')?>">
                            <i class="icon-star"></i>
                            <span>学员评价管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($Appointment_class)){echo $Appointment_class;}?>">
                        <a href="<?php echo site_url('manage_appointment/index/')?>">
                            <i class="icon-star"></i>
                            <span>学员预约管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($AddInfo_class)){echo $AddInfo_class;}?>">
                        <a href="<?php echo site_url('manage_addinfo/index/')?>">
                            <i class="icon-star"></i>
                            <span>场地教练车型信息添加</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($CoachAndPlace_class)){echo $CoachAndPlace_class;}?>">
                        <a href="<?php echo site_url('manage_coachandplace/index/')?>">
                            <i class="icon-star"></i>
                            <span>场地教练管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($News_class)){echo $News_class;}?>">
                        <a href="<?php echo site_url('manage_news/admin/')?>">
                            <i class="icon-edit"></i>
                            <span>新闻信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($UnChecked_class)){echo $UnChecked_class;}?>">
                        <a href="<?php echo site_url('manage_controller/UnChecked/')?>"  >
                            <i class="icon-check"></i>
                            <span>未审核</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($Pass_class)){echo $Pass_class;}?>">
                        <a href="<?php echo site_url('manage_controller/Pass/')?>">
                            <i class="icon-ok-sign"></i>
                            <span>审核合格</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($UnPassed_class)){echo $UnPassed_class;}?>">
                        <a href="<?php echo site_url('manage_controller/UnPassed/')?>">
                            <i class="icon-remove-sign"></i>
                            <span>审核不合格</span>
                        </a>
                    </li>

                    <li >
                        <a  href="<?php echo site_url('manage_controller/Login') ?>" class="user-menu">
                            <i class="icon-off"></i>
                        <span >
                            退出登录
                        </span>
                        </a>
                    </li>


                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-user"></i> 驾校管理系统</h1>
                        <h4></h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <?php echo $content_for_layout?>

                <footer>
                    <p>2015 © 蓝光驾校管理系统.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.crosshair.js"></script>
        <script src="<?php echo base_url()?>assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url()?>assets/code-prettify/code-prettify.js"></script>

        <!--flaty scripts-->
        <script src="<?php echo base_url()?>js/flaty.js"></script>
<!--        <script>-->
<!--            $(document).ready(function(){-->
<!--                $('#sidebar ul li').click(function(){-->
<!--                    $(this).siblings().removeClass('active');-->
<!--                    $(this).addClass('active');-->
<!---->
<!--                })-->
<!---->
<!--            })-->
<!---->
<!--        </script>-->

    </body>
</html>
