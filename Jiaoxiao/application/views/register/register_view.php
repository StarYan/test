<!DOCTYPE html>
<html>
<head>
    <title>珠海智慧驾培</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">



    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">
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

    </style>
</head>
<body>
<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <h1>
                <a href="#">
                    珠海智慧驾培
                </a>
            </h1>
            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('/main/goInterface') ?>">首页</a>
                    </li>

                    <li class="dropdown active">
                        <a href="<?php echo site_url('/main/goMain')?>" class="dropdown-toggle" data-toggle="dropdown">
                            学车入口
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="<?php echo site_url('/register/goRegister')?>">在线报名</a></li>
                            <li><a href="#">科目一视频培训</a></li>
                            <li><a href="<?php echo site_url('/appointment/index')?>">网上预约</a></li>
                            <li><a href="<?php echo site_url('/evaluate/index')?>">学员评价</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            驾校入口
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/manage_schoolRegister/goRegister')?>">注册/登录</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            驾校信息
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/school/schoolIntroduction')?>">驾校</a></li>
                            <li><a href="<?php echo site_url('/school/coachIntroduction')?>">教练</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('/manage_ranking/goRanking')?>">综合排名</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>/feedback.html">投诉建议</a>
                    </li>
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">在线报名</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="#">学车入口</a></li>
                <li class="active">在线报名</li>
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!-- Begin Content -->
    <div class="container content">
        <div class="row">
            <div class="col-md-9">
                <div class="row margin-bottom-40">
                    <div class="col-md-12">
                        <form class="sky-form" id="register-form"  action="<?php echo site_url('/register/Save')?>" method="post" enctype="multipart/form-data" >
                            <header>报名表 (带<span style="color: red;">*</span>的为必填项)</header>
                            <fieldset>
                                <section>
                                    <div class="row">
                                        <label for="nickname" class="label col col-4"><span style="color: red">*</span> 账号名</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-user"></i>
                                                <input type="text" name="nickname" id="nickname"  />
                                                <span class="help-inline">7个汉字或者14个英文字符组成</span>
                                            </label>
                                            <label class="label" style="color:red"></label>
                                        </div>

                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="password" class="label col col-4"><span style="color: red">*</span> 密码</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-lock"></i>
                                                <input type="password" name="password" id="password" />
                                                <span class="help-inline">8-20个字符，包含大小写字母和数字的组合，不能使用特殊字符</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4" for="confirm_password"><span style="color: red">*</span> 确认密码</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append fa fa-lock"></i>
                                                <input type="password" name="confirm_password" id="confirm_password" />
                                                <span class="help-inline">请再次填写密码</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <hr>

                                <section>
                                    <div class="row">
                                        <label for="name" class="label col col-4"><span style="color: red">*</span> 姓名</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <input type="text" name="name" id="name"/>
                                                <span class="help-inline">最多由7个汉字组成</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 性别</label>
                                        <div class="col col-8 inline-group">
                                            <label class="radio">
                                                <input type="radio" name="sex" value="1" checked><i class="rounded-x"></i> 男
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="sex" value="0"><i class="rounded-x"></i> 女
                                            </label>
                                        </div>
                                    </div>
                                </section>


                                <section>
                                    <div class="row">
                                        <label class="label col col-4" for="birthday"><span style="color: red">*</span> 出生日期</label>
                                        <div class="col col-8 ">
                                            <label class="input">
                                                <input type="date" id="birthday" name="birthday" required />
                                                <span class="help-inline">格式：yyyy/mm/dd</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="id" class="label col col-4"><span style="color: red">*</span> 身份证号</label>
                                        <div class="col col-8 ">
                                            <label class="input">
                                                <input type="text" name="id" id="id" />
                                                <span class="help-inline">请填写身份证号码</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="phone" class="label col col-4"><span style="color: red">*</span> 手机号码</label>
                                        <div class="col col-8 ">
                                            <label class="input">
                                                <input type="text" name="phone" id="phone" />
                                                <span class="help-inline">请填写手机号码</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="qq" class="label col col-4">QQ</label>
                                        <div class="col col-8 ">
                                            <label class="input">
                                                <input type="text" name="qq" id="qq" pattern="[1-9][0-9]{4,14}" />
                                                <span class="help-inline">请填写QQ号码</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="email" class="label col col-4"><span style="color: red">*</span> Email：</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <input type="email" name="email" id="email" />
                                                <span class="help-inline">请填写电子邮箱</span>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label for="address" class="label col col-4"><span style="color: red">*</span> 住址</label>
                                        <div class="col col-8">
                                            <label class="textarea">
                                                <textarea  name="address" id="address" rows="3" ></textarea>
                                            </label>
                                            <label class="control-label" style="color:red"></label>
                                        </div>
                                    </div>
                                </section>


                                <hr>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 身份证照片</label>
                                        <div class="col col-8">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px; border:0;">
                                                    <img  id="imgShow" style="width: 428px; height: 270px; border:0;" />
                                                </div>
                                                <input type="file" id="img" class="form-control default" name="img"  style="border:0; margin:10px;" />
                                                <span class="help-inline">图片建议分辨率为428像素 * 270像素</span>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                                <hr>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 报名驾校</label>
                                        <div class="col col-8">
                                            <select class="form-control school"  tabindex="1"  name="school" >
                                                <?php if(!empty($licence)&&!empty($school_name)){ ?>
                                                    <option value="<?php echo $licence;?>" selected><?php echo $school_name;?></option>
                                                <?php }else{ ?>
                                                    <option value="" selected>-- 请选择驾校 --</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 选择教练</label>
                                        <div class="col col-8">
                                            <select class="form-control coach"  tabindex="1"  name="coach" >
                                                <option value="" selected>-- 请选择教练 --</option>
                                            </select>
                                            <div style="margin-top: 4%; color: rgb(88,177,242);display: none;" id="coachInformation">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 培训类别</label>
                                        <div class="col col-8">
                                            <select class="form-control  chosen"  tabindex="1" id="select1" name="select1" >
                                                <option value="" selected>-- 请选择培训类别 --</option>
                                                <option value="type1" >普通机动车驾驶员培训</option>
                                                <option value="type2">道路运输驾驶员从业资格培训</option>
                                                <option value="type3">其他培训</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row">
                                        <label class="label col col-4"><span style="color: red">*</span> 培训车型</label>
                                        <div class="col col-8">
                                            <select class="form-control  chosen" name="wanted_car_type" id="select2" name="select2" >
                                            </select>
                                            <input type="text" style="display:none" id="others" class="form-control"  />
                                        </div>
                                    </div>
                                </section>

                            </fieldset>

                            <footer>
                                <button type="submit" class="btn btn-primary" >报名</button>
                                <button type="reset" class="btn">重置</button>
                            </footer>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Begin Sidebar -->
            <div class="col-md-3">
                <div class="headline" style="margin-top: 0"><h2 class="heading-sm">热门驾校</h2></div>

                <ul class="list-unstyled who margin-bottom-30 news"></ul>
                <ul class="list-unstyled who margin-bottom-30 schoolTitle"></ul>

                <div class="headline"><h2 class="heading-sm">人气教练</h2></div>
                <div class="box-content "><ul class="list-unstyled who margin-bottom-30 coach-rank-list"></ul></div>

                <div class="headline"><h2 class="heading-sm">联系方式</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>北京师范大学珠海分校</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>zhihuijiapei@163.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>13631224755</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.zhuhuijiapei.com</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>

    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            2016 &copy; 珠海智慧驾培 All Rights Reserved.
                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div>




<!--basic scripts-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->

<script src="<?php echo base_url()?>assets/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>

<!--flaty scripts-->
<script src="<?php echo base_url()?>/js/flaty.js"></script>
<script src="<?php echo base_url()?>/assets/nicescroll/jquery.nicescroll.min.js"></script>

<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>
<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script src="<?php echo base_url()?>/js/jquery.barrating.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: '<?php echo site_url("/register/schoolInformation")?>',
            data: {},
            dataType: "json",
            success: function(data){
                for(var i = 0;i < data.data.length;i++){
                    var str='<option value='+data.data[i]['licence']+'>'+data.data[i]['school_name']+'</option>';
                    $(".school").append(str);
                }
            }
        });


        $.ajax({
            type: "POST",
            url: '<?php echo site_url("/register/showSchoolByPassRate")?>',
            data: {},
            dataType: "json",
            success: function(data){
                $(".carousel-inner").empty();
                for(var i = 0;i < 10;i++){
                    var str = '<li><a href="<?php echo site_url('/school/goSchool')?>/'+data.data[i]['id']+
                        '" target="_blank" ><span style="overflow:hidden;white-space:nowrap;display: block;"><i>'+(i+1)+'</i> '+data.data[i]['school_name']
                        +' </span></a></li>';
                    $(".schoolTitle").append(str);
                }
            }
        });

        var licence=$('.school').val();
        $(".coach").empty();
        $.ajax({
            type: "POST",
            url: '<?php echo site_url("/register/getCoachBySchool")?>',
            data: {
                licence:licence
            },
            dataType: "json",
            success: function(data){
                var str1='<option value="" selected>-- 请选择教练 --</option>';
                $(".coach").append(str1);
                for(var i = 0;i < data.data.length;i++){
                    var str='<option value='+data.data[i]['id']+'>'+data.data[i]['c_name']+'</option>';
                    $(".coach").append(str);
                }
            }
        });

        $(".school").change(function(){
            var licence=$('.school').val();
            $(".coach").empty();
            $.ajax({
                type: "POST",
                url: '<?php echo site_url("/register/getCoachBySchool")?>',
                data: {
                    licence:licence
                },
                dataType: "json",
                success: function(data){
                    var str1='<option value="" selected>-- 请选择教练 --</option>';
                    $(".coach").append(str1);
                    for(var i = 0;i < data.data.length;i++){
                        var str='<option value='+data.data[i]['id']+'>'+data.data[i]['c_name']+'</option>';
                        $(".coach").append(str);
                    }
                }
            });
        });

        $(".coach").change(function(){
            var coachID=$('.coach').val();
            $("#coachInformation").empty();
            $.ajax({
                type: "POST",
                url: '<?php echo site_url("/register/getCoachById")?>',
                data: {
                    coachID:coachID
                },
                dataType: "json",
                success: function(data){
                    var str='<strong>'+
                        '<p>教练价格：'+data.data[0]['price']+'元/小时</p>'+
                        '<p>教练电话：'+data.data[0]['tel']+'</p>'+
                        '<p>教练已带学员数量：'+data.data[0]['student_num']+'人</p>'+
                        '<p>教练资格证号：'+data.data[0]['qualification_certificate']+'</p>'+
                        '<p>教练星级：'+data.data[0]['star']+'星</p>'+
                        '</strong>';
                    $("#coachInformation").append(str);
                }
            });

            $("#coachInformation").fadeIn();
        });


        $.ajax({
            type: "POST",
            url: '<?php echo site_url("/register/coachInformation")?>',
            data: {},
            dataType: "json",
            success: function(data){
                $(".coach-rank-list").empty();
                var str1='<li data-list-collapse="accordion" class="active" >'+
                            '<div class="container rank-list-title">'+
                            '<span class="col-md-3 rank-list-num" style="background-color: rgba(231, 76, 60,1.0)">'+1+'</span>'+
                            '<span class="col-md-5 list-coach-name">'+data.data[0]['c_name']+'</span>'+
                            '</div>'+
                            '<div class="container rank-list-content">'+
                            '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/uploads/'+data.data[0]['img']+'" /></div>'+
                            '<div class="list-coach-detail col-md-8">'+
                            '<p>所属驾校：<a href="'+data.data[0]['school_url']+'">'+data.data[0]['school_name']+'</a></p>'+
                            '<p>价格：'+data.data[0]['price']+'/小时</p>'+
                            '<p>电话：'+data.data[0]['tel']+'</p>'+
                            '</div>'+
                            '</div>'+
                            '</li>';
                $(".coach-rank-list").append(str1);

                var str2='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(230, 126, 34,1.0)">'+2+'</span>'+
                    '<span class="col-md-5 list-coach-name">'+data.data[1]['c_name']+'</span>'+
                    '</div>'+
                    '<div class="container rank-list-content">'+
                    '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/uploads/'+data.data[1]['img']+'" /></div>'+
                    '<div class="list-coach-detail col-md-8">'+
                    '<p>所属驾校：<a href="'+data.data[1]['school_url']+'">'+data.data[1]['school_name']+'</a></p>'+
                    '<p>价格：'+data.data[1]['price']+'/小时</p>'+
                    '<p>电话：'+data.data[1]['tel']+'</p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str2);

                var str3='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(241, 196, 15,1.0)">'+3+'</span>'+
                    '<span class="col-md-5 list-coach-name">'+data.data[2]['c_name']+'</span>'+
                    '</div>'+
                    '<div class="container rank-list-content">'+
                    '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/uploads/'+data.data[2]['img']+'" /></div>'+
                    '<div class="list-coach-detail col-md-8">'+
                    '<p>所属驾校：<a href="'+data.data[1]['school_url']+'">'+data.data[2]['school_name']+'</a></p>'+
                    '<p>价格：'+data.data[2]['price']+'/小时</p>'+
                    '<p>电话：'+data.data[2]['tel']+'</p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str3);

                for(var i=3;i < 10;i++){
                    var str='<li data-list-collapse="accordion">'+
                            '<div class="container rank-list-title">'+
                            '<span class="col-md-3 rank-list-num">'+(i+1)+'</span>'+
                            '<span class="col-md-5 list-coach-name">'+data.data[i]['c_name']+'</span>'+
                            '</div>'+
                            '<div class="container rank-list-content">'+
                            '<div class="list-coach-img col-md-4"><img src="<?php echo base_url()?>/uploads/'+data.data[i]['img']+'" /></div>'+
                            '<div class="list-coach-detail col-md-8">'+
                            '<p>所属驾校：<a target="_blank" href="'+data.data[i]['school_url']+'">'+data.data[i]['school_name']+'</a></p>'+
                            '<p>价格：'+data.data[i]['price']+'/小时</p>'+
                            '<p>电话：'+data.data[i]['tel']+'</p>'+
                            '</div>'+
                            '</div>'+
                            '</li>';

                    $(".coach-rank-list").append(str);
                }
                $("ul.coach-rank-list li:last").css("border-bottom","none");

                $(function () {!function () {
                    var a = $('[data-list-collapse="accordion"]');
                    a.mouseenter(function () {
                        $(this).siblings(a).removeClass("active"), $(this).addClass("active")
                    })
                }()
                });
            }
        });

        $("#register-form").validate({

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
                    element.next("span").toggle();
                    error.appendTo(element.parent("label").next("label"));
            }
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
