<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>珠海智慧驾培</title>
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
                    <?php echo $this->session->userdata('schoolRegister')['school_name'];?>后台管理
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
                    <li class="<?php if(!empty($introduction_class)){echo $introduction_class;}?>">
                        <a href="<?php echo site_url('school/introductionAdmin')?>">
                            <i class="icon-home"></i>
                            <span>驾校信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($coach_class)){echo $coach_class;}?>">
                        <a href="<?php echo site_url('school/coachAdmin/')?>">
                            <i class="icon-user"></i>
                            <span>教练信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($car_class)){echo $car_class;}?>">
                        <a href="<?php echo site_url('school/carAdmin/')?>">
                            <i class="icon-truck"></i>
                            <span>车辆信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($student_class)){echo $student_class;}?>">
                        <a href="<?php echo site_url('school/studentAdmin/')?>">
                            <i class="icon-group"></i>
                            <span>学员信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($place_class)){echo $place_class;}?>">
                        <a href="<?php echo site_url('school/placeAdmin/')?>">
                            <i class="icon-road"></i>
                            <span>场地信息管理</span>
                        </a>
                    </li>

                    <li class="<?php if(!empty($key_class)){echo $key_class;}?>">
                        <a href="<?php echo site_url('school/keyAdmin/')?>">
                            <i class="icon-lock"></i>
                            <span>修改密码</span>
                        </a>
                    </li>

                    <li >
                        <a href="#" class="user-menu logout">
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
                        <h1><i class="icon-user"></i> 欢迎来到<?php echo $this->session->userdata('schoolRegister')['school_name'];?>管理系统</h1>
                        <h4></h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <?php echo $content_for_layout?>

                <footer>
                    <p>2016 © 珠海智慧驾培.</p>
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
        <script src="<?php echo base_url()?>js/flaty.js"></script>

        <script>
            /**
             * 用户登退出
             */
            $(".logout").click(function() {
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url('school/Logout')?>',
                    data: {
                    },
                    dataType: "json",
                    success: function (data) {
                        alert(data.msg);
                        window.location.href="<?php echo site_url('/manage_schoolRegister/goRegister')?>";
                    }
                });
            });
        </script>
    </body>
</html>
