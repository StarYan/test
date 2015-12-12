<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>驾校预约</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/component.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty-responsive.css">


</head>
<body>

<!-- 登录表单 -->
<div class="md-modal md-effect-7" id="login">
    <div class="md-content">
        <h3>用户登录</h3>
        <div>
            <form action="#" class="form-horizontal"  method="post">
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label" for="username">用户名:</label>
                    <div class="col-sm-6 col-lg-10 controls">
                        <input type="text" name="username" id="username" class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="请输入用户名" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label" for="password">用户密码:</label>
                    <div class="col-sm-6 col-lg-10 controls">
                        <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="请输入用户密码" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                        <input type="submit" class="btn btn-primary" value="登录">
                        <input type="reset" class="btn" value="重置">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- 登录表单 -->
<div class="md-overlay"></div>

<div class="a" >
    <!-- BEGIN Navbar -->
    <div id="navbar" class="navbar">
        <a class="navbar-brand" href="#">
            <small>
                <i class="icon-desktop"></i>
                驾校预约
            </small>
        </a>



        <!-- 学员登录按钮 -->
        <ul class="nav flaty-nav pull-right">
            <li>
                <a href="#" class="md-trigger" data-modal="login" >
                    登录
                </a>
            </li>
        </ul>
        <!-- 学员登录按钮 -->

        <button type="button" class="navbar-toggle  navbar-btn btn " data-toggle="collapse" data-target="#select">
            <i class="icon-reorder"></i>
            点击预约
        </button>
    </div>
    <!-- END Navbar -->

    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1>蓝光驾校欢迎您</h1>
            <h4>驾校标语</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- 预约栏 -->
    <div id="breadcrumbs" class="container">
        <form action="" class="form-horizontal" id="validation-form" method="post">
            <div class="collapse navbar-collapse row " id="select">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="place" class="col-sm-6 col-lg-4 control-label">场地</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="place" id="place"  data-rule-required="true">
                                <option value=""> 选择场地 </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="time" class="col-sm-6 col-lg-4 control-label">时间</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="time" id="time" data-rule-required="true">
                                <option value=""> 选择时间 </option>
                                <option value="1"> 07:00 - 09:00 </option>
                                <option value="2"> 10:00 - 12:00 </option>
                                <option value="3"> 14:00 - 16:00 </option>
                                <option value="4"> 15:00 - 17:00 </option>
                                <option value="5"> 19:00 - 21:00 </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="coach" class="col-sm-6 col-lg-4 control-label">教练</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="coach" id="coach" data-rule-required="true">
                                <option value=""> 选择教练 </option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="car" class="col-sm-6 col-lg-4 control-label">车型</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="car" id="car" data-rule-required="true">
                                <option value=""> 选择车型 </option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="submit" class="btn btn-primary" value="预约" id="submit">
                            <button type="button" class="btn btn-danger">取消</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <!-- 预约栏 -->
</div>


<!-- 预约内容介绍 -->
<div class="container" id="main-container" >
    <div id="main-content" style="margin-top: 100px;">
        <!-- 教练推荐 -->
        <div class="row" style="margin-top: 100px; z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>教练推荐</h3>
                    </div>


                </div>
            </div>
        </div>
        <!-- 教练推荐 -->
        <br/><br/><br/>

        <!-- 场地介绍 -->
        <div class="row" style="margin-top: 100px; z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>场地介绍</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>场地图片</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/1_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>场地详情</h4>
                                <dl>
                                    <dt>场地地址</dt>
                                    <dd>广东省珠海市</dd>
                                    <dt>场地描述</dt>
                                    <dd>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</dd>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 场地介绍 -->
        <br /><br /><br />

        <!-- 教练介绍 -->
        <div class="row" style="z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>教练介绍</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>教练图片</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/2_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>教练详情</h4>
                                <dl class="dl-horizontal">
                                    <dt>姓名</dt>
                                    <dd>XXX</dd>
                                    <dt>电话</dt>
                                    <dd>13631224950</dd>
                                    <dt>价钱</dt>
                                    <dd><i class="icon-jpy"></i>200/小时</dd>
                                    <dt>星级</dt>
                                    <dd><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 教练介绍 -->
        <br /><br /><br />

        <!-- 车型介绍 -->
        <div class="row" style="z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>车型介绍</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>车辆图片</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/3_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>车辆详情</h4>
                                <dl class="dl-horizontal">
                                    <dt>车牌号码</dt>
                                    <dd>粤C88888</dd>
                                    <dt>车辆型号</dt>
                                    <dd>C1</dd>
                                    <dt></dt>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 车型介绍 -->

        <footer>
            <p>2015 ? 蓝光驾校.</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
    </div>
</div>
<!-- 预约内容介绍 -->


<!--basic scripts-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url()?>/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
<script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>/assets/sparkline/jquery.sparkline.min.js"></script>



<!--flaty scripts-->
<script src="<?php echo base_url()?>/js/flaty.js"></script>
<script src="<?php echo base_url()?>/js/classie.js"></script>
<script src="<?php echo base_url()?>/js/modalEffects.js"></script>

<script>
    $(document).ready(function(){
        //加载场地信息
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getplace')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#place").empty();
                var s="<option value=''> 选择场地 </option>";
                $("#place").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#place").append(str);
                }
            }
        });

        //加载教练信息
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getcoach')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#coach").empty();
                var s="<option value=''> 选择教练 </option>";
                $("#coach").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#coach").append(str);
                }
            }
        });

        //加载车辆信息
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getcar')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#car").empty();
                var s="<option value=''> 选择车型 </option>";
                $("#car").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#car").append(str);
                }
            }
        });

        //提交预约信息到后台进行预约
        $("#submit").onclick(function(){
            var placeid=$("#place").val();
            var coachid=$("#coach").val();
            var timeid=$("#time").val();
            var carid=$("#car").val();
            var userid=<?=$dataUser->id?>;
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('manage_appointment/saveappointment')?>',
                data: {
                    placeid: placeid,
                    coachid: coachid,
                    timeid: timeid,
                    carid:carid,
                    userid:userid
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                }
            });
        });

    });
</script>

</body>
</html>
