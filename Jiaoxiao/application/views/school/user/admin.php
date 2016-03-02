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
                <li class="list-group-item"><a href="<?php echo site_url('/school/coachAdmin')?>"><i class="fa fa-user"></i> 教练信息管理</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('/school/carAdmin')?>"><i class="fa fa-car"></i> 车辆信息管理</a></li>
                <li class="list-group-item active"><a href="<?php echo site_url('/school/studentAdmin')?>"><i class="fa fa-users"></i> 学员信息管理</a></li>
                <li class="list-group-item"><a href="<?php echo site_url('/school/keyAdmin')?>"><i class="fa fa-key"></i> 修改密码</a></li>
            </ul>
            <br />
        </div>

        <div class="col-md-9">
            <div class="manage-content" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" style="margin-top: 0">
                            <div class="box-title">
                                <h3><i class="icon-search"></i> 搜索栏</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="box-content container" style="display: none;border: 1px solid rgba(88,177,252,.5)">
                                <form class="form-horizontal" method="post" action="<?php echo site_url('/school/studentSearch')?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-4 col-lg-3 control-label">名字</label>
                                            <div class="col-sm-7 col-lg-8 controls">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                                    <input name="name" id="name" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idcard" class="col-sm-4 col-lg-3 control-label">身份证号码</label>
                                            <div class="col-sm-7 col-lg-8 controls">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                                    <input name="idcard" id="idcard" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wanted_car_type" class="col-sm-4 col-lg-3 control-label">培训车型</label>
                                            <div class="col-sm-7 col-lg-8 controls">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                                    <input name="wanted_car_type" id="wanted_car_type" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sex" class="col-sm-4 col-lg-3 control-label">性别</label>
                                            <div class="col-sm-7 col-lg-8 controls">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                                    <select name="sex" id="sex"  class="form-control">
                                                        <option value="">-- 选择性别 --</option>
                                                        <option value="0">女</option>
                                                        <option value="1">男</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="schedule" class="col-sm-4 col-lg-3 control-label">学习进度</label>
                                            <div class="col-sm-7 col-lg-8 controls">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                                    <select name="schedule" id="schedule"  class="form-control">
                                                        <option value="">-- 选择进度 --</option>
                                                        <option value="0">空</option>
                                                        <option value="1">科目一</option>
                                                        <option value="2">科目二</option>
                                                        <option value="3">科目三</option>
                                                        <option value="4">科目四</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-sm-4 col-lg-3 controls">
                                                <button type="submit" class="btn btn-primary search"><i class="icon-search"></i> 搜索</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-list"></i> 学员信息管理</h3>
                            </div>
                            <div class="box-content" style="border:1px solid #ddd; padding: 0; ">
                                <div class="table-responsive">
                                    <table class="table table-hover fill-head table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center">名字</th>
                                            <th class="text-center">身份证号</th>
                                            <th class="text-center">性别</th>
                                            <th class="text-center">电话</th>
                                            <th class="text-center">培训车型</th>
                                            <th class="text-center">学习进度</th>
                                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if($result):?>
                                            <?php foreach($result as $studentInfo):?>
                                                <tr>
                                                    <td class="text-center"><?php echo $studentInfo->name;?></td>
                                                    <td class="text-center"><?php echo $studentInfo->idcard;?></td>
                                                    <td class="text-center"><?php if($studentInfo->sex==0){echo '女';}else{echo '男';};?></td>
                                                    <td class="text-center"><?php echo $studentInfo->phone;?></td>
                                                    <td class="text-center"><?php echo $studentInfo->wanted_car_type;?></td>
                                                    <td class="text-center"><?php if($studentInfo->schedule==0){echo '';}elseif($studentInfo->schedule==1){echo '科目一';}elseif($studentInfo->schedule==2){echo '科目二';}elseif($studentInfo->schedule==3){echo '科目三';}elseif($studentInfo->schedule==4){echo '科目四';};?></td>
                                                    <td class="visible-md visible-lg text-center">
                                                        <div class="btn-group">
                                                            <a class="btn btn-sm show-tooltip" title="审核" href="<?php echo site_url('/school/studentUpdate').'/'.$studentInfo->id; ?>"><i class="icon-edit"></i></a>
                                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/school/studentDelete').'/'.$studentInfo->id; ?>"><i class="icon-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-center">
                                    <?php echo $link;?>
                                </div>
                            </div>
                        </div>
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
        $(".submit").click(function(){
            $.ajax({
                type :"POST",
                url :"<?php echo site_url('/evaluate/acceptEvaluate') ?>",
                data :$(this).closest("form").serialize(),
                dataType: "json",
                success :function(data){
                    alert(data.msg);
                    location.reload();
                }
            });
        });


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
