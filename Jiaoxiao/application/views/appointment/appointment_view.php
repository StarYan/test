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

    <style>
        .gallery > li {
            margin-left: 14px;
            margin-right: 14px;
        }

        .gallery > li > .gallery-tools {
            height: 40px;
            bottom: 0;
        }


    </style>
</head>
<body>

<!-- 登录表单 -->
<div class="md-modal md-effect-7" id="login">
    <div class="md-content">
        <h3>用户登录</h3>
        <div>
            <form  class="form-horizontal" >
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label" for="nickname">用户名:</label>
                    <div class="col-sm-6 col-lg-10 controls">
                        <input type="text" name="nickname" id="nickname" class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="请输入用户名" />
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
                        <input type="button" class="btn btn-primary" value="登录" id="log_in">
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
            <li  id="log">
                <?php $udata =$this->session->id;?>
                <?php if(!$udata): ?>
                <a href="#" class="md-trigger" data-modal="login" id="user" value="login" >
                    登录
                </a>
                <?php else: ?>
                    <li>
                    <a>欢迎来到蓝光驾校,<?php echo $ndata = $this->session->nickname;?></a>
                    </li>
                <li>
                    <a class='md-trigger logout' href='#'><i class='icon-off'></i> 注销</a>
                </li>
                <?php endif; ?>
            </li>
            <li id="logout">

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

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="time" class="col-sm-6 col-lg-4 control-label">时间</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="time" id="time" data-rule-required="true">

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="coach" class="col-sm-6 col-lg-4 control-label">教练</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="coach" id="coach" data-rule-required="true">

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="car" class="col-sm-6 col-lg-4 control-label">车型</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="car" id="car" data-rule-required="true">

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="button" class="btn btn-primary" value="预约" id="submit">
                            <button type="reset" class="btn btn-danger">取消</button>
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

                    <div class="box-content">
                        <ul class="gallery" id="hot">

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- 教练推荐 -->
        <br/><br/><br/>

        <!-- 场地介绍 -->
        <div class="row" style=" z-index: -1;">
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
                                        <a href="#" rel="prettyPhoto" title="场地照片">
                                            <div>
                                                <img class="place" src="<?php echo base_url()?>images/14.jpg" alt=""  />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 place">
                                <h4>场地详情</h4>
                                <dl class="place">
                                    <dd>此处展示所选场地的详细信息</dd>
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
                                <ul class="gallery ">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img class="coach" src="<?php echo base_url()?>images/14.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>教练详情</h4>
                                <dl class="coach">
                                    <dd>此处展示所选教练的详细信息</dd>
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
                                                <img class="car" src="<?php echo base_url()?>images/14.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>车辆详情</h4>
                                <dl class="car">
                                    <dd>此处展示所选车辆的详细信息</dd>
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
    window.onload=function() {


        $.ajax({
            type: "POST",
            url: '<?php echo site_url('appointment/allPlace')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#place").empty();
                $("#place").append("<option value=''>选择场地</option>");
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].p_name + "</option>";
                    $("#place").append(str);

                }
            }
        });




        $.ajax({
            type: "POST",
            url: '<?php echo site_url('appointment/allCoach')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#coach").empty();
                $("#coach").append("<option value=''>选择教练</option>");
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].c_name + "</option>";
                    $("#coach").append(str);
                }
                $("#hot").empty();
                for(var i = 0; i < 5; i++){
                    var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data[i].img+'" alt="" /> <i></i> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:white;">'+ data.data[i].c_name+'教练</strong></h4></p> </div> </li>';
                    $("#hot").append(hot);
                }
            }
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('appointment/allTime')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#time").empty();
                $("#time").append("<option value=''>选择时间</option>");
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].time + "</option>";
                    $("#time").append(str);
                }
            }
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('appointment/allCar')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#car").empty();
                $("#car").append("<option value=''>选择车型</option>");
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].number + "</option>";
                    $("#car").append(str);
                }
            }
        });


        $("#place").change(function(){
            var placeid=$("#place").val();
            var timeid=$("#time").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/coach')?>',
                data: {
                    placeID:placeid,
                    timeID:timeid
                },
                dataType: "json",
                success: function (data) {
                    $("#coach").empty();
                    $("#coach").append("<option value=''>选择教练</option>");
                    for (var i = 0; i < data.data['result'].length; i++) {
                        var str = " <option value=" + data.data['result'][i].coachid + ">" + data.data['result'][i].c_name + "</option>";
                        $("#coach").append(str);
                    }

                    $("img.place").attr("src","<?php echo base_url()?>uploads/"+data.data['placeInfo'][0].img);
                    var string="<dt>场地地址</dt><dd>"+data.data['placeInfo'][0].address +"</dd><dt>场地描述</dt><dd>"+data.data['placeInfo'][0].description +"</dd>"
                    $("dl.place").html(string);

                    $("#hot").empty();
                    for(var i = 0; i < 5; i++){
                        var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data['result'][i].img+'" alt="" /> <i></i> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:white;">'+ data.data['result'][i].c_name+'教练</strong></h4></p> </div> </li>';
                        $("#hot").append(hot);
                    }
                }
            });
        });


        $("#time").change(function(){
            var placeid=$("#place").val();
            var timeid=$("#time").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/coach')?>',
                data: {
                    placeID:placeid,
                    timeID:timeid
                },
                dataType: "json",
                success: function (data) {
                    $("#coach").empty();
                    $("#coach").append("<option value=''>选择教练</option>");
                    for (var i = 0; i < data.data['result'].length; i++) {
                        var str = " <option value=" + data.data['result'][i].coachid + ">" + data.data['result'][i].c_name + "</option>";
                        $("#coach").append(str);
                    }
                    $("img.place").attr("src","<?php echo base_url()?>uploads/"+data.data['placeInfo'][0].img);
                    var string="<dt>场地地址</dt><dd>"+data.data['placeInfo'][0].address +"</dd><dt>场地描述</dt><dd>"+data.data['placeInfo'][0].description +"</dd>"
                    $("dl.place").html(string);

                    $("#hot").empty();
                    for(var i = 0; i < 5; i++){
                        var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data['result'][i].img+'" alt="" /> <i></i> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:white;">'+ data.data['result'][i].c_name+'教练</strong></h4></p> </div> </li>';
                        $("#hot").append(hot);
                    }
                }
            });
        });


        $("#coach").change(function(){
            var coachid=$("#coach").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/placeAndTime')?>',
                data: {
                    coachID:coachid
                },
                dataType: "json",
                success: function (data) {
                    $("img.coach").attr("src","<?php echo base_url()?>uploads/"+data.data['coachInfo'][0].img);
                    var string="<dt>姓名</dt><dd>"+data.data['coachInfo'][0].c_name +"</dd><dt>电话</dt><dd>"+data.data['coachInfo'][0].tel +"</dd><dt>价钱</dt><dd>"+data.data['coachInfo'][0].price +"</dd><dt>星级</dt><dd>"+data.data['coachInfo'][0].star +"</dd>";
                    $("dl.coach").html(string);
                }
            });
        });

        $("#car").change(function(){
            var carid=$("#car").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/carInfo')?>',
                data: {
                    carID:carid
                },
                dataType: "json",
                success: function (data) {
                    $("img.car").attr("src","<?php echo base_url()?>uploads/"+data.data['carInfo'][0].img);
                    var string="<dt>车牌号码</dt><dd>"+data.data['carInfo'][0].number +"</dd><dt>车辆型号</dt><dd>"+data.data['carInfo'][0].type +"</dd><dt>车辆详情</dt><dd>"+data.data['carInfo'][0].car_detail +"</dd>";
                    $("dl.car").html(string);
                }
            });
        });



        $("#submit").click(function() {
            var nickname=$("#log").text();
            var placeid=$("#place").val();
            var timeid=$("#time").val();
            var coachid=$("#coach").val();
            var carid=$("#car").val();

            if($("#user").text()!=""){
                alert("请先登录，再进行预约");
            }else{
                if(nickname&&placeid&&timeid&&coachid&&carid){

                    $.ajax({
                        type: "POST",
                        url: '<?php echo site_url('appointment/saveappointment')?>',
                        data: {
                            nickname:nickname,
                            placeID:placeid,
                            timeID:timeid,
                            coachID:coachid,
                            carID:carid
                        },
                        dataType: "json",
                        success: function (data) {
                            alert(data.msg);
                        }
                    });

                }else{
                    alert('请选择好所有的预约信息再进行提交');
                }
            }
        });

        $(".logout").click(function() {
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/logout')?>',
                data: {
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        });
        /**
         * 用户登录验证ajax
         */
        $("#log_in").click(function() {
            var nickname=$("#nickname").val();
            var password=$("#password").val();

            $.ajax({
                type: "POST",
                url: '<?php echo site_url('appointment/login')?>',
                data: {
                    nickname:nickname,
                    password:password
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    location.reload();
                    /*if(data.code==1){
                        alert(data.msg);
                    }else{
                        $(".md-overlay").trigger('click');
                        $("#log").empty();
                        var login="<a>"+data.data['result'].nickname+"</a>";
                        $("#log").html(login);
                        var logout="<a class='md-trigger' href='<?php echo site_url()?>/appointment/appointmentmodel'><i class='icon-off'></i> 注销</a>"
                        $("#logout").html(logout);
                    }*/
                }
            });
        });

       
    }
</script>
</body>
</html>
