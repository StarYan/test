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
            height: 120px;
        }

        .gallery > li > .gallery-tools {
            height: 30px;
            bottom: 5px;
            background-color: white;
        }

        .affix{
            top:0px;
        }

        .nav-header{
            margin: 0;
            width: 240.828px;
            color: white;
            height: 100px;
            background-color: rgba(88,177,252,1);
            padding: 10px;
        }

        .logout{
            color: white;
        }

        .nav-header > a:hover{
            text-decoration: underline;
            color: white;
        }

        .nav-content{
            margin: 0;
            width: 240.828px;
            padding: 20px;
            transition:border linear .2s,box-shadow linear .5s;
            -moz-transition:border linear .2s,-moz-box-shadow linear .5s;
            -webkit-transition:border linear .2s,-webkit-box-shadow linear .5s;
            outline:none;
            border-color:rgba(88,177,252,.75);
            box-shadow:0 0 18px rgba(88,177,242,.5);
            -moz-box-shadow:0 0 18px rgba(88,177,242,.5);
            -webkit-box-shadow:0 0 18px rgba(88,177,242,3);
        }

        .nav-content > li > div > div {
            padding-bottom: 10px;
            border-bottom: 1px dashed #ddd;
        }

        .copyright{
            height:50px;
            background-color: rgba(88,177,252,1);
            color:white;
            padding:15px;
            font-size: 13px;
            margin-top: 5%;
        }

        @media (max-width: 767px) {
            #select > ul {
                position: relative;
            }
            
            .container{
                width: 100%;
                margin: 0;
                padding: 0;
            }

            .nav-header{
                width:100%;
            }
            
            .nav-content{
                width: 100%;
            }
        }

        
    </style>
</head>
<body>
    <div  class="navbar" style="height: 270px;">
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
                    <nav style="float: right;" class="navbar navbar-inverse navbar-fixed-top">
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


            <div class="row text-center " style="margin: 8% auto">
                <div style="color: white;">
                    <h1>珠海网上驾校欢迎您</h1>
                    <br/>
                    <p><h3>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</h3></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Navbar -->

    <div class="container" style="margin-top: 1%;">
        <div class="row col-md-10 col-md-offset-1">
            <div class="col-md-3 text-center" id="select"  >
                <ul class="nav nav-sidebar sidebar-fixed" data-spy="affix" data-offset-top="300" >
                    <div class="col-md-12 text-center nav-header" >
                        <p><h4><i class="icon-user" style="font-size: 25px;"></i>  <?php echo $ndata = $this->session->nickname;?></h4></p>
                        <a class='logout' href='#'>[ 退出 ]</a>
                    </div>
                    <form class="form-horizontal nav-content" id="validation-form" method="post">
                        <li class="active">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 controls">
                                        <select class="form-control" name="place" id="place"  data-rule-required="true">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 controls">
                                        <select class="form-control" name="time" id="time" data-rule-required="true">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 controls">
                                        <select class="form-control" name="coach" id="coach" data-rule-required="true">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-12 col-lg-12 controls">
                                        <select class="form-control" name="car" id="car" data-rule-required="true">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                        <input type="button" class="btn btn-primary" value="预约" id="submit">
                                        <button type="reset" class="btn btn-danger">取消</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </form>
                </ul>
            </div>

            <div class="col-xs-12 col-md-9">
                <div class="hidden-xs col-md-12">
                    <div class="container" >
                        <div class="row col-md-3  text-center" style="background-color: rgb(88,177,242);color: white; margin-bottom:0px;  ">
                            <h3>教练推荐</h3>
                        </div>
                    </div>

                    <div class="container ">
                        <div class="row col-md-12" style="background-color: rgb(88,177,242); margin-bottom:20px; ">
                        </div>
                    </div>
                    <div class="container">
                            <ul class="gallery text-center" id="hot">

                            </ul>
                    </div>
                </div>


                <div class="col-md-12" style="margin-top: 5%;">
                    <div class="container" >
                        <div class="row col-md-3  text-center" style="background-color: rgb(88,177,242);color: white; margin-bottom:0px;  ">
                            <h3>场地介绍</h3>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row col-md-12" style="background-color: rgb(88,177,242); margin-bottom:20px; ">
                        </div>
                    </div>
                    <div class="container">
                                <div class="hidden-xs col-md-6 text-center">
                                    <a href="#" rel="prettyPhoto" title="场地照片">
                                        <img class="place" src="<?php echo base_url()?>images/14.jpg" alt=""  />
                                    </a>
                                </div>
                                <div class="col-md-6 place">
                                    <h4>场地详情</h4>
                                    <dl class="place">
                                        <dd>此处展示所选场地的详细信息</dd>
                                    </dl>
                                </div>
                    </div>
                </div>


                <div class="col-md-12" style="margin-top: 5%;">
                    <div class="container" style="margin-bottom: 0">
                        <div class="row col-md-3  text-center" style="background-color: rgb(88,177,242);color: white; ">
                            <h3>教练介绍</h3>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row col-md-12" style="background-color: rgb(88,177,242); margin-bottom:20px; ">
                        </div>
                    </div>

                    <div class="container">
                                <div class="hidden-xs col-md-6 text-center">
                                    <a href="#" rel="prettyPhoto" title="教练照片">
                                        <img class="coach" src="<?php echo base_url()?>images/14.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h4>教练详情</h4>
                                    <dl class="coach">
                                        <dd>此处展示所选教练的详细信息</dd>
                                    </dl>
                                </div>
                    </div>
                </div>


                <div class="col-md-12" style="margin-top: 5%;">
                    <div class="container">
                        <div class="row col-md-3  text-center" style="background-color: rgb(88,177,242);color: white; margin-bottom:0px;  ">
                            <h3>车辆介绍</h3>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row col-md-12" style="background-color: rgb(88,177,242); margin-bottom:20px; ">
                        </div>
                    </div>

                    <div class="container">
                                <div class="hidden-xs col-md-6 text-center">
                                    <a href="#" rel="prettyPhoto" title="车辆照片">
                                        <img class="car" src="<?php echo base_url()?>images/14.jpg" alt="" />
                                    </a>
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
                $("#place").append("<option value=''>-- 选择场地 --</option>");
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
                $("#coach").append("<option value=''>-- 选择教练 --</option>");
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].c_name + "</option>";
                    $("#coach").append(str);
                }
                $("#hot").empty();
                for(var i = 0; i < 10; i++){
                    var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data[i].img+'" alt="" /> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:black;">'+ data.data[i].c_name+'教练</strong></h4></p> </div> </li>';
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
                $("#time").append("<option value=''>-- 选择时间 --</option>");
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
                $("#car").append("<option value=''>-- 选择车型 --</option>");
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
                    $("#coach").append("<option value=''>-- 选择教练 --</option>");
                    for (var i = 0; i < data.data['result'].length; i++) {
                        var str = " <option value=" + data.data['result'][i].coachid + ">" + data.data['result'][i].c_name + "</option>";
                        $("#coach").append(str);
                    }

                    $("img.place").attr("src","<?php echo base_url()?>uploads/"+data.data['placeInfo'][0].img);
                    var string="<dt>场地地址</dt><dd>"+data.data['placeInfo'][0].address +"</dd><dt>场地描述</dt><dd>"+data.data['placeInfo'][0].description +"</dd>"
                    $("dl.place").html(string);

                    $("#hot").empty();
                    for(var i = 0; i < 5; i++){
                        var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data['result'][i].img+'" alt="" /> <i></i> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:black;">'+ data.data['result'][i].c_name+'教练</strong></h4></p> </div> </li>';
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
                    $("#coach").append("<option value=''>-- 选择教练 --</option>");
                    for (var i = 0; i < data.data['result'].length; i++) {
                        var str = " <option value=" + data.data['result'][i].coachid + ">" + data.data['result'][i].c_name + "</option>";
                        $("#coach").append(str);
                    }
                    $("img.place").attr("src","<?php echo base_url()?>uploads/"+data.data['placeInfo'][0].img);
                    var string="<dt>场地地址</dt><dd>"+data.data['placeInfo'][0].address +"</dd><dt>场地描述</dt><dd>"+data.data['placeInfo'][0].description +"</dd>"
                    $("dl.place").html(string);

                    $("#hot").empty();
                    for(var i = 0; i < 5; i++){
                        var hot='<li><a href="#" rel="prettyPhoto" title="教练推荐"> <div> <img src="'+'<?php echo base_url()?>images/'+ data.data['result'][i].img+'" alt="" /> <i></i> </div> </a> <div class="gallery-tools"> <p><h4><strong style="color:black;">'+ data.data['result'][i].c_name+'教练</strong></h4></p> </div> </li>';
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
            var placeid=$("#place").val();
            var timeid=$("#time").val();
            var coachid=$("#coach").val();
            var carid=$("#car").val();
            var userid=<?php echo $this->session->id;?>

                if(userid&&placeid&&timeid&&coachid&&carid){
                    $.ajax({
                        type: "POST",
                        url: '<?php echo site_url('appointment/saveappointment')?>',
                        data: {
                            userID:userid,
                            placeID:placeid,
                            timeID:timeid,
                            coachID:coachid,
                            carID:carid
                        },
                        dataType: "json",
                        success: function (data) {
                            if(data.code){
                                alert(data.msg);
                                window.location.href="<?php echo site_url('appointment/index')?>";
                            }else{
                                alert(data.msg);
                            }
                        }
                    });

                }else{
                    alert('请选择好所有的预约信息再进行提交');
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
                    window.location.href="<?php echo site_url('appointment/index')?>";
                }
            });
        });



    }
</script>
</body>
</html>
