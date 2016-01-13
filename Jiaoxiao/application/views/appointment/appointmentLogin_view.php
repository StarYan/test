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
        body{
            background-color: rgba(88,177,252,0.7);
        }

        .login-form {
            margin-top: 5%;
            padding: 80px;
            background-color: rgb(88,177,252);
            color: white;
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
            margin-top: 5%;
            height:50px;
            background-color: rgb(88,177,242);
            color:white;
            padding:15px;
            font-size: 13px;
        }

        .register-link a :hover {
            text-decoration: underline;
        }

        /*手机分辨率*/
        @media (max-width: 767px) {
            body {
                background-color: rgba(88,177,252,1);
            }
        }

        /*平板分辨率*/
        @media (min-width: 768px) and (max-width: 979px) {
            body {
                background-color: rgba(88,177,252,1);
            }
        }

    </style>

</head>
<body>
<!-- BEGIN Navbar -->
<div  class="navbar" style="height: auto;">
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
                            <a href="<?php echo site_url('/main/goInterface')?>"><h4><i class="icon-home"></i> 驾校首页</h4></a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('/main/goMain')?>"><h4><i class="icon-list"></i> 学车流程</h4></a>
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

    </div>

</div>
<!-- END Navbar -->

<div class="container" >
    <div class="row col-md-10 col-md-offset-1">
        <div class="hidden-xs hidden-sm col-md-6 text-center " style="padding: 80px;margin-top: 5%;">
            <div style="color: white;">
                <h1>珠海网上驾校欢迎您</h1>
                <br/>
                <p><h1>微 笑 是 我 们 的 语 言</h1></p>
                <p><h1>文 明 是 我 们 的 信 念</h1></p>
                <p><h1>教 学 是 我 们 的 责 任</h1></p>
                <p><h1>成 功 是 我 们 的 心 愿</h1></p>
            </div>
        </div>

        <div class="login-form col-xs-18 col-sm-12 col-md-6">
            <form class="form-horizontal text-center" id="login-form" method="post" action="<?php echo site_url('/appointment/login')?>">
                <h1><strong>预 约 登 录</strong></h1>
                <br>
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
                        <button type="submit" class="btn form-control" style="background-color: white; color: black ">登 录</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls pull-right register-link" >
                        <a href="<?php echo site_url('/register/goRegister')?>" style="color: white;"><h5>注册新账号</h5></a>
                    </div>
                </div>
            </form>
        </div>
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

<script>
<?php if(!empty($flag)){
        echo 'alert("请输入正确的账号或者密码")';
}?>
</script>

</body>
</html>
