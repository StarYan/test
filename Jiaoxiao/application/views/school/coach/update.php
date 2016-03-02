<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>驾校信息管理平台</title>
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
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/glyphicons-pro/glyphicons/web/html_css/css/glyphicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/unify-font-awesome/css/font-awesome.min.css">

    <style>
        p, li, li a, label {
            color: #555;
        }

        .nav-header{
            margin: 0;
            width: 240.828px;
            color: white;
            height: 240px;
            background-color: rgba(88,177,252,1);
            padding: 30px;
        }


        .logout{
            color: white;
        }

        .nav-header > a:hover{
            text-decoration: underline;
            color: white;
        }

        .nav-sidebar > li{
            padding: 0;
        }

        .nav-sidebar > li > a > i{
            margin-right: 10px;
            font-size: 14px;
        }

        .nav-sidebar > li.active, .nav-sidebar > li.active:hover{
            background-color: #717984;
        }

        .nav-sidebar > li.active > a {
            color: #fff;
        }

        .nav-sidebar > li > a :hover{
            color: rgba(88,177,252,1);
        }

        .nav-sidebar > li.active, .nav-sidebar > li.active:hover, .nav-sidebar > li.active:focus {
            border-color: #ddd;
        }

        * {
            border-radius: 0 !important;
        }

        .manage-content{
            background: white;
        }

        .box > .box-title {
            background-color: rgba(88,177,252,1);
            text-shadow: 0 1px 0 rgba(88,177,252,1);
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
            height: auto;
        }


        @media (max-width: 767px) {
            .nav-header{
                width:100%;
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
    </div>

</div>
<!-- END Navbar -->



<div class="container" style="margin-top: 3%">
    <div class="row col-md-10 col-md-offset-1">
        <div class="col-xs-12 col-md-3">
            <div class="col-md-12 text-center nav-header" >
                <i class="icon-user" style="font-size: 100px;"></i>
                <p><h5><?php echo $this->session->userdata('schoolRegister')['school_name'];?></h5></p>
                <p><h5>信息管理平台</h5></p>
                <a class='logout' href='#'>[ 退出 ]</a>
            </div>

            <ul class="nav nav-sidebar list-group" style="margin-top: 10%;">
                <li class="list-group-item"><a href="<?php echo site_url('/school/introductionAdmin')?>"><i class="fa fa-home"></i> 驾校信息管理</a></li>
                <li class="list-group-item active"><a href="<?php echo site_url('/school/coachAdmin')?>"><i class="fa fa-user"></i> 教练信息管理</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('/school/carAdmin')?>"><i class="fa fa-car"></i> 车辆信息管理</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('/school/studentAdmin')?>"><i class="fa fa-users"></i> 学员信息管理</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('/school/keyAdmin')?>"><i class="fa fa-key"></i> 修改密码</a></li>
            </ul>
            <br />
        </div>

        <div class="col-md-9">
            <div class="manage-content" >
                <div class="box" style="margin-top: 0;margin-bottom: 3%;">
                    <div class="box-title">
                        <h3><i class="icon-edit"></i> 更新教练信息</h3>
                        <div class="box-tool">
                            <a class="btn btn-primary" href="<?php echo site_url('/school/coachAdmin')?>">返回</a>
                        </div>
                    </div>
                </div>

                <form action="<?php echo site_url('/school/coachUpdate').'/'.$result->id?>" class="form-horizontal" method="post" style="padding: 10px;">
                    <div class="form-group">
                        <label for="c_name" class="col-xs-3 col-lg-2 control-label">教练名</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="c_name" id="c_name" class="form-control" value="<?=$result->c_name?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="qualification_certificate" class="col-xs-3 col-lg-2 control-label">资格证号</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="qualification_certificate" id="qualification_certificate" value="<?=$result->qualification_certificate?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tel" class="col-xs-3 col-lg-2 control-label">联系电话</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="tel" id="tel" value="<?=$result->tel?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-xs-3 col-lg-2 control-label">价格</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="price" id="price" value="<?=$result->price?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="star" class="col-xs-3 col-lg-2 control-label">星级</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <select name="star" id="star"  class="form-control">
                                <option value="">-- 选择星级 --</option>
                                <option value="0" <?php if($result->star==0){echo 'selected';}?>>0星</option>
                                <option value="1" <?php if($result->star==1){echo 'selected';}?>>1星</option>
                                <option value="2" <?php if($result->star==2){echo 'selected';}?>>2星</option>
                                <option value="3" <?php if($result->star==3){echo 'selected';}?>>3星</option>
                                <option value="4" <?php if($result->star==4){echo 'selected';}?>>4星</option>
                                <option value="5" <?php if($result->star==5){echo 'selected';}?>>5星</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="student_num" class="col-xs-3 col-lg-2 control-label">学员数量</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="student_num" id="student_num" value="<?=$result->student_num?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存修改</button>
                            <button type="reset" class="btn">重置</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- 教练评价 -->


<div class="container"
     style="margin-top: 8%;height: 250px; background-color: rgb(88,177,242);color:white;padding:20px;">
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
    });
</script>
</html>
