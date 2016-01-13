<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>网上报名</title>
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
    <link rel="stylesheet" href="<?php echo base_url()?>/css/bootstrap-stars.css">

    <script type="text/javascript">

        window.onload=function(){
            var oS1=document.getElementById("select1");
            var oS2=document.getElementById("select2");

            function addopt(t,v){
                var opt=document.createElement("option");
                opt.text=t;
                opt.value=v;
                opt.selected=false;
                oS2.add(opt);
            }

            oS1.onchange=function myselect(){
                var number=oS2.options.length;
                var oI=document.getElementById('others');

                for(var i=number-1;i>=0;i--){
                    oS2.removeChild(oS2.childNodes.item(i));
                }

                if(oS1.value=="type1"){
                    if(oS2.style['display']='none'){
                        oS2.style['display']='block';
                        oI.style['display']='none';
                        oI.name='';
                        oS2.name='wanted_car_type';
                    }
                    $('#select2').empty();
                    $('#select2').append("<option value=0 selected>-- 请选择培训车型 --</option>");
                    addopt("A1","A1");
                    addopt("A2","A2");
                    addopt("A3","A3");
                    addopt("B1","B1");
                    addopt("B2","B2");
                    addopt("C1","C1");
                    addopt("C2","C2");
                    addopt("C3","C3");
                    addopt("C4","C4");
                    addopt("D","D");
                    addopt("E","E");
                    addopt("F","F");
                    addopt("M","M");
                    addopt("N","N");
                    addopt("P","P");
                }
                if(oS1.value=="type2"){
                    if(oS2.style['display']='none'){
                        oS2.style['display']='block';
                        oI.style['display']='none';
                        oI.name='';
                        oS2.name='wanted_car_type';
                    }
                    $('#select2').empty();
                    $('#select2').append("<option value=0 selected>-- 请选择培训车型 --</option>");
                    addopt("道路旅客运输","道路旅客运输");
                    addopt("道路货物运输","道路货物运输");
                    addopt("道路危险货物运输","道路危险货物运输");
                }
                if(oS1.value=="type3"){
                    $('#select2').empty();
                    oS2.style['display']='none';
                    oI.style['display']='block';
                    oS2.name='';
                    oI.name='wanted_car_type'

                }

            }
        }

    </script>

    <style>

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


        .box-content {
            transition:border linear .2s,box-shadow linear .5s;
            -moz-transition:border linear .2s,-moz-box-shadow linear .5s;
            -webkit-transition:border linear .2s,-webkit-box-shadow linear .5s;
            outline:none;
            border-color:rgba(88,177,252,.75);
            box-shadow:0 0 28px rgba(88,177,242,.5);
            -moz-box-shadow:0 0 28px rgba(88,177,242,.5);
            -webkit-box-shadow:0 0 28px rgba(88,177,242,3);

        }

        .coach-rank-list {
            padding: 0px;
            list-style: none;
        }

        .coach-rank-list > li {
            height: 50px;
            overflow: hidden;
            margin: 0;
            padding: 0;
            border-bottom: 1px dashed #ddd;
        }

        .coach-rank-list > li.active{
            height:auto;
        }

        .rank-list-title {
            font-size: 14px;
            height: 50px;
            padding: 5px;
        }

        .rank-list-num {
            margin: 0;
            color: white;
            padding: 10px;
            width: 40px;
            height: 40px;
            background: #3498db;
            text-align: center;
        }

        .list-coach-name {
            margin: 0;
            color: black;
            padding: 10px;
            height: 40px;
            text-align: left;
        }

        .list-coach-star{
            margin: 0;
            color: black;
            padding: 10px;
            height: 40px;
            text-align: right;
        }

        .rank-list-content{
            padding:10px;
            color: #999;
        }

        .list-coach-img{
            padding:0;
            margin:0;
            height: 96px;
            width: 96px;
        }

        .list-coach-detail{
            padding:10px;
        }

        .register-title > a :hover{
            text-decoration: underline;
        }

    </style>
</head>
<body>
<!-- BEGIN Navbar -->
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





<!-- BEGIN Container -->
<div class="container"  style="margin-top: 3%;" >
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="box">
                    <div class="container" >
                        <div class="row box-content register-title" style="background-color: rgb(88,177,242);color: white; ">
                            <h3 class="col-md-6">珠海网上驾校网上报名</h3>
                            <a href="<?php echo site_url('appointment/index')?>"  class="col-md-3 text-center pull-right" style="color: white;margin:8px 0;" ><h5>已有账号，请直接登陆</h5></a>
                        </div>
                    </div>

                    <div class="box-content">
                        <form class="form-horizontal"  action="<?php echo site_url('/register/Save')?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="nickname" class="col-sm-3 col-lg-2 control-label">账号名</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="nickname" id="nickname" class="form-control"  />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 col-lg-2 control-label">密码</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="password" name="password" id="password" class="form-control" />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="confirm_password">确认密码</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control"   />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="name" class="col-sm-3 col-lg-2 control-label">姓名</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">性别</label>
                                <div class="col-sm-5 col-lg-3 controls">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="男" checked> 男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="女"> 女
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="birthday">出生日期</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input class="form-control"  type="date" id="birthday" name="birthday" required />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>
                            <div class="form-group">
                                <label for="id" class="col-sm-3 col-lg-2 control-label">身份证号</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="id" id="id" class="form-control"  />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-sm-3 col-lg-2 control-label">手机号码</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="phone" id="phone" class="form-control"  />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>
                            <div class="form-group">
                                <label for="qq" class="col-sm-3 col-lg-2 control-label">QQ</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="qq" id="qq" class="form-control" pattern="[1-9][0-9]{4,14}" />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 col-lg-2 control-label">Email：</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="email" name="email" id="email" class="form-control"  >
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-sm-3 col-lg-2 control-label">住址</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <textarea name="address" id="address" rows="3" class="form-control" ></textarea>
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">上传身份证照片</label>
                                <div class=" col-sm-9 col-lg-10 controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px; border:0;">
                                            <img  id="imgShow" style="width: 428px; height: 270px; border:0;" />
                                        </div>
                                        <input type="file" id="img" class="form-control default" name="img"  style="border:0; margin:10px;" />
                                    </div>
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">报名驾校</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <select class="form-control  chosen"  tabindex="1"  name="school" >
                                        <option value="" selected>-- 请选择驾校 --</option>
                                        <option value="01" >蓝光驾校</option>
                                    </select>
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">培训类别</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <select class="form-control  chosen"  tabindex="1" id="select1" name="select1" >
                                        <option value="" selected>-- 请选择培训类别 --</option>
                                        <option value="type1" >普通机动车驾驶员培训</option>
                                        <option value="type2">道路运输驾驶员从业资格培训</option>
                                        <option value="type3">其他培训</option>
                                    </select>
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">培训车型</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <select class="form-control  chosen" name="wanted_car_type" id="select2" name="select2" >
                                    </select>
                                    <input type="text" style="display:none" id="others" class="form-control"  />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary" >报名</button>
                                    <button type="reset" class="btn">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class=" hidden-xs col-md-3">
                <div class="box row">
                    <div class="container " >
                        <div class="row box-content text-center" style="background-color: rgb(88,177,242);color: white;  ">
                            <h3>人气教练</h3>
                        </div>
                    </div>
                    <div class="box-content ">
                        <ul class="coach-rank-list">
                        </ul>
                    </div>
                </div>
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

<script src="<?php echo base_url()?>assets/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>

<!--flaty scripts-->
<script src="<?php echo base_url()?>js/flaty.js"></script>

<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>
<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script src="<?php echo base_url()?>/js/jquery.barrating.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: '<?php echo site_url("/register/coachInformation")?>',
            data: {},
            dataType: "json",
            success: function(data){
                $(".coach-rank-list").empty();
                var str1='<li data-list-collapse="accordion" class="active" >'+
                            '<div class="container rank-list-title">'+
                            '<a href="#">'+
                            '<span class="col-md-3 rank-list-num" style="background-color: rgba(231, 76, 60,1.0)">'+1+'</span>'+
                            '<span class="col-md-5 list-coach-name">'+data.data[0]['c_name']+'</span>'+
                            '<span class="col-md-5 list-coach-star">'+
                            '<select data-coach-star="'+data.data[0]['star']+'" name="rating">'+
                            '<option value="" selected>0</option>'+
                            '<option value="1">1</option>'+
                            '<option value="2">2</option>'+
                            '<option value="3">3</option>'+
                            '<option value="4">4</option>'+
                            '<option value="5">5</option>'+
                            '</select>'+
                            '</span>'+
                            '</a>'+
                            '</div>'+
                            '<div class="container rank-list-content">'+
                            '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/images/teacher-male.png" /></div>'+
                            '<div class="list-coach-detail col-md-8">'+
                            '<p>所属驾校：<a href="'+data.data[0]['school_url']+'">'+data.data[0]['school_name']+'</a></p>'+
                            '<p>价格：'+data.data[0]['price']+'/小时</p>'+
                            '<p>电话：'+data.data[0]['tel']+'</p>'+
                            '<p><a href="#" class="btn btn-primary pull-right">查看</a></p>'+
                            '</div>'+
                            '</div>'+
                            '</li>';
                $(".coach-rank-list").append(str1);

                var str2='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<a href="#">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(230, 126, 34,1.0)">'+2+'</span>'+
                    '<span class="col-md-5 list-coach-name">'+data.data[1]['c_name']+'</span>'+
                    '<span class="col-md-5 list-coach-star">'+
                    '<select data-coach-star="'+data.data[1]['star']+'" name="rating">'+
                    '<option value="" selected>0</option>'+
                    '<option value="1">1</option>'+
                    '<option value="2">2</option>'+
                    '<option value="3">3</option>'+
                    '<option value="4">4</option>'+
                    '<option value="5">5</option>'+
                    '</select>'+
                    '</span>'+
                    '</a>'+
                    '</div>'+
                    '<div class="container rank-list-content">'+
                    '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/images/teacher-male.png" /></div>'+
                    '<div class="list-coach-detail col-md-8">'+
                    '<p>所属驾校：<a href="'+data.data[1]['school_url']+'">'+data.data[1]['school_name']+'</a></p>'+
                    '<p>价格：'+data.data[1]['price']+'/小时</p>'+
                    '<p>电话：'+data.data[1]['tel']+'</p>'+
                    '<p><a href="#" class="btn btn-primary pull-right">查看</a></p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str2);

                var str3='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<a href="#">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(241, 196, 15,1.0)">'+3+'</span>'+
                    '<span class="col-md-5 list-coach-name">'+data.data[2]['c_name']+'</span>'+
                    '<span class="col-md-5 list-coach-star">'+
                    '<select data-coach-star="'+data.data[2]['star']+'" name="rating">'+
                    '<option value="" selected>0</option>'+
                    '<option value="1">1</option>'+
                    '<option value="2">2</option>'+
                    '<option value="3">3</option>'+
                    '<option value="4">4</option>'+
                    '<option value="5">5</option>'+
                    '</select>'+
                    '</span>'+
                    '</a>'+
                    '</div>'+
                    '<div class="container rank-list-content">'+
                    '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/images/teacher-male.png" /></div>'+
                    '<div class="list-coach-detail col-md-8">'+
                    '<p>所属驾校：<a href="'+data.data[1]['school_url']+'">'+data.data[2]['school_name']+'</a></p>'+
                    '<p>价格：'+data.data[2]['price']+'/小时</p>'+
                    '<p>电话：'+data.data[2]['tel']+'</p>'+
                    '<p><a href="#" class="btn btn-primary pull-right">查看</a></p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str3);

                for(var i=3;i < 10;i++){
                    var str='<li data-list-collapse="accordion">'+
                            '<div class="container rank-list-title">'+
                            '<a target="_blank" href="#">'+
                            '<span class="col-md-3 rank-list-num">'+(i+1)+'</span>'+
                            '<span class="col-md-5 list-coach-name">'+data.data[i]['c_name']+'</span>'+
                            '<span class="col-md-5 list-coach-star">'+
                            '<select data-coach-star="'+data.data[i]['star']+'" name="rating">'+
                            '<option value="" selected>0</option>'+
                            '<option value="1">1</option>'+
                            '<option value="2">2</option>'+
                            '<option value="3">3</option>'+
                            '<option value="4">4</option>'+
                            '<option value="5">5</option>'+
                            '</select>'+
                            '</span>'+
                            '</a>'+
                            '</div>'+
                            '<div class="container rank-list-content">'+
                            '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/images/teacher-male.png" /></div>'+
                            '<div class="list-coach-detail col-md-8">'+
                            '<p>所属驾校：<a target="_blank" href="'+data.data[i]['school_url']+'">'+data.data[i]['school_name']+'</a></p>'+
                            '<p>价格：'+data.data[i]['price']+'/小时</p>'+
                            '<p>电话：'+data.data[i]['tel']+'</p>'+
                            '<p><a target="_blank" href="#" class="btn btn-primary pull-right">查看</a></p>'+
                            '</div>'+
                            '</div>'+
                            '</li>';

                    $(".coach-rank-list").append(str);
                }

                for(var i=0;i < 10;i++){
                    $('[data-coach-star="'+data.data[i]['star']+'"]').barrating({
                        theme: 'bootstrap-stars',
                        readonly:true,
                        showSelectedRating: false
                    });
                    $('[data-coach-star="'+data.data[i]['star']+'"]').barrating('set', data.data[i]['star']);
                }

                $(function () {!function () {
                    var a = $('[data-list-collapse="accordion"]');
                    a.mouseenter(function () {
                        $(this).siblings(a).removeClass("active"), $(this).addClass("active")
                    })
                }()
                });
            }
        });



        $("#login_form").submit(function(){
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('/register/Login')?>',
                data: $(this).serialize(),
                dataType: "json",
                success : function (data) {
                    if(data.code){
                        alert(data.msg);
                    }
                }
            });
        });

        $("#logout").click(function() {
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('register/Logout')?>',
                data: {
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        });



        $("#register_form").validate({

            rules: {
                nickname: {
                    required :true,
                    remote :{
                        url :"<?php echo site_url('/register/CheckNickname')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            nickname :function(){return $("#nickname").val();}
                        }
                    },
                    nickname :true
                },
                password: {
                    required :true,
                    psd :true
                },
                confirm_password: {
                    required :true,
                    equalTo :"#password",
                    psd :true
                },
                name :{
                    required :true,
                    username :true
                },
                birthday :{
                    required :true
                },
                id :{
                    required :true,
                    isIDCard :true
                },
                phone :{
                    required :true,
                    isPhone :true
                },
                qq :{

                },
                email :{
                    email :true
                },
                address :{
                    required :true
                },
                img :{
                    required :true
                },
                select1 :{
                    required :true
                },
                select2 :{
                    required :true
                }

            },
            messages :{
                nickname: {
                  required :"账号名不能为空",
                  remote :"该账号名已存在"
                },
                password: {
                  required :"密码不能为空"
                },
                confirm_password: {
                    required :"请再次输入密码",
                    equalTo :"请确保密码一致"
                },
                name: {
                    required :"姓名不能为空"
                },
                birthday: {
                    required :"出生日期不能为空"
                },
                id :{
                    required :"身份证号码不能为空",
                    isIDCard :"请正确填写您的身份证号"
                },
                phone :{
                    required :"手机号码不能为空",
                    isPhone :"请正确填写您的手机号码"
                },
                qq :{

                },
                email :{
                    email :"请正确填写您的电子邮箱"
                },
                address :{
                    required :"地址不能为空"
                },
                img :{
                    required :"请上传身份证照"
                },
                select1 :{
                    required :"请选择培训类别"
                },
                select2 :{
                    required :"请选择培训车型"
                }
            },
            errorPlacement: function(error,element) {
                    error.appendTo(element.parent("div").next("label"));
            },
            debug:true
        });

        new uploadPreview({ UpBtn: "img", DivShow: "imgDiv", ImgShow: "imgShow" });

        <?php
            if(!empty($flag)){
                echo 'alert("报名成功")';
             }
        ?>


    });
</script>

</body>
</html>
