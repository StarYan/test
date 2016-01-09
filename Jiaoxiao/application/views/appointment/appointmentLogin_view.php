<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>蓝光驾校</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>css/component.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/flaty-responsive.css">

    <style>
        .login-form {
            padding: 80px;
            padding-bottom: 140px;
            background-color: rgb(88,177,252);
            color: white;
        }

        .login-form {
            transition:border linear .2s,box-shadow linear .5s;
            -moz-transition:border linear .2s,-moz-box-shadow linear .5s;
            -webkit-transition:border linear .2s,-webkit-box-shadow linear .5s;
            outline:none;
            border-color:rgba(88,177,252,.75);
            box-shadow:0 0 28px rgba(88,177,242,.5);
            -moz-box-shadow:0 0 28px rgba(88,177,242,.5);
            -webkit-box-shadow:0 0 28px rgba(88,177,242,3);
        }

        .form-group{
            margin-top: 5%;
        }


        .company-info > p{
            margin: 15px;
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

    </style>

</head>
<body >
<!-- BEGIN Navbar -->
<div  class="navbar" style="height: 310px;">
    <div class="container ">
        <div class="row col-md-10 col-md-offset-1">
            <div class="col-md-5">
                <a class="navbar-brand" href="#">
                    <h2>
                        <strong>
                            LanGuang 蓝光驾校
                        </strong>
                    </h2>
                </a>
            </div>

            <div class="col-md-7 hidden-sm hidden-xs">
                <nav style="float: right;">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#"><h4><i class="icon-home"></i> 驾校首页</h4></a>
                        </li>

                        <li>
                            <a href="#"><h4><i class="icon-list"></i> 驾校新闻</h4></a>
                        </li>

                        <li>
                            <a href="#"><h4><i class="icon-file-text"></i> 驾校简介</h4></a>
                        </li>

                        <li>
                            <a href="#"><h4><i class="icon-phone"></i> 联系我们</h4></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row text-center " style="margin: 8% auto">
            <div style="color: white;">
                <h1>蓝光驾校欢迎您</h1>
                <br/>
                <p><h3>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</h3></p>
            </div>
        </div>
    </div>

</div>
<!-- END Navbar -->

<div class="container" style="margin-top: 6%;">
    <div class="row col-md-10 col-md-offset-1">
        <div class="login-form col-md-10 col-md-offset-1">
            <form class="form-horizontal text-center" action="<?php echo site_url('appointment/login')?>" method="post">
                <h2>预 约 登 录</h2>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="用户名" name="nickname"  class="form-control" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" placeholder="用户密码" name="password"  class="form-control" required />
                    </div>
                </div>

                <br/>
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary form-control">登 录</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<div class="container" style="margin-top: 8%;height: 250px; background-color: rgb(88,177,242);color:white;padding:20px;" >
    <div class="row col-md-10 col-md-offset-1" >
        <div class="col-xs-12 col-sm-12 col-md-3 company-info" >
            <div class="title">
                <h2>联系方式</h2>
            </div>
            <p><h5>驾校地址</h5></p>
            <p><h5><i class="icon-phone"></i> 驾校电话</h5></p>
            <p><h5><i class="icon-print"></i> 驾校传真号</h5></p>
            <p><h5><i class="icon-globe"></i> 驾校网址</h5></p>
            <p><h5><i class="icon-envelope"></i> 驾校邮箱</h5></p>
        </div>

        <div class="col-md-7 company-info hidden-xs hidden-sm " style="float: right" >
            <div class="title">
                <h2 >友情链接</h2>
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
                <span>Copyright &copy; 蓝光驾校</span> |
                <span>京ICP备11008151号</span>
            </div>
        </div>
    </div>
</div>


<!--basic scripts-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
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



<!--flaty scripts-->
<script src="<?php echo base_url()?>js/flaty.js"></script>
<script src="<?php echo base_url()?>js/classie.js"></script>


</body>
</html>
