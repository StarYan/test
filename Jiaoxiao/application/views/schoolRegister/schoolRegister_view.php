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
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

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

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/pages/page_log_reg_v1.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-colors/blue.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo base_url()?>/unify-v1.7/assets/css/custom.css">

    <style>
        body{
            background-color: white;
        }

        .login-form {
            margin-top: 10%;
            padding: 80px;
            color: #39392D;
            background: #fefefe;
            border: solid 1px #eee;
            box-shadow: 0 0 3px #eee;
        }

        .register-form {
            margin-top: 5%;
            padding: 40px;
            color: #39392D;
            background: #fefefe;
            border: solid 1px #eee;
            box-shadow: 0 0 3px #eee;
        }

        .form-group{
            margin-top: 5%;
        }
    </style>

</head>
<body>
<!-- BEGIN Navbar -->
<div  class="wrapper">
    <!--=== Header v4 ===-->
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

                    <li class="dropdown">
                        <a href="<?php echo site_url('/main/goMain')?>" class="dropdown-toggle" data-toggle="dropdown">
                            学车入口
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('/register/goRegister')?>">在线报名</a></li>
                            <li><a href="#">科目一视频培训</a></li>
                            <li><a href="<?php echo site_url('/appointment/index')?>">网上预约</a></li>
                            <li><a href="<?php echo site_url('/evaluate/index')?>">学员评价</a></li>
                        </ul>
                    </li>

                    <li class="dropdown active">
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
</div>
<!-- END Navbar -->

<div class="container margin-bottom-40">
    <div class="row col-md-12">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1  login-wrapper">
            <form id="form-register" class="register-form" action="<?php echo site_url('/manage_schoolRegister/acceptRegister')?>" method="post" enctype="multipart/form-data">
                <h2 class="text-center">驾 校 注 册</h2>
                <p class="text-center">
                    已经有账号了？请点击<a href="#" class="goto-login">登录</a>您的账号
                </p>
                <hr/>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="用户名" name="nickname" class="form-control" id="nickname" />
                            <span class="help-inline">7个汉字或者14个英文字符组成</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="联系人" name="name" id="name" class="form-control" />
                            <span class="help-inline">填写联系人姓名</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="password" placeholder="密码" name="password" id="password" class="form-control" />
                            <span class="help-inline">8-20个字符，包含大小写字母和数字的组合，不能使用特殊字符</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="营业执照" name="licence" id="licence" class="form-control" />
                            <span class="help-inline">填写营业执照号码</span>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="驾校名称" name="school_name" id="school_name" class="form-control" />
                            <span class="help-inline">填写驾校名称</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="text" placeholder="联系电话" name="tel" id="tel" class="form-control" />
                            <span class="help-inline">填写电话号码</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="password" placeholder="确认密码" name="confirm_password" class="form-control" />
                            <span class="help-inline">再次填写密码</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <input type="file" id="img" class="form-control default" name="img" />
                            <span class="help-inline">图片建议分辨率为376像素 * 270像素</span>
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="display: none;">
                                <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 376px; height: 270px; border:0;">
                                    <img  id="imgShow" style="width: 376px; height: 270px; border:0;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group" style="padding-left: 15px;padding-right: 15px;min-height: 1px;">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary form-control">注 册</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 login-wrapper">
            <form id="form-login" action="#" method="post" style="display: none;" class="login-form">
                <h2 class="text-center">登 录 账 号</h2>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" name="nickname" placeholder="账号名" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" name="password" placeholder="账号密码" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <a type="button" class="btn btn-primary form-control submit">登 录</a>
                    </div>
                </div>

                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-register pull-right">点击注册</a>
                </p>
            </form>
        </div>
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
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>



<!--flaty scripts-->
<script src="<?php echo base_url()?>js/flaty.js"></script>
<script src="<?php echo base_url()?>js/classie.js"></script>

<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>

<script>
    $(document).ready(function(){
        $("#form-register").validate({
            rules: {
                nickname: {
                    required :true,
                    remote :{
                        url :"<?php echo site_url('/manage_schoolRegister/Check')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            nickname :function(){return $("#nickname").val();}
                        }
                    },
                    nickname :true
                },
                school_name :{
                    remote :{
                        url :"<?php echo site_url('/manage_schoolRegister/Check')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            school_name :function(){return $("#school_name").val();}
                        }
                    },
                    required :true
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
                    remote :{
                        url :"<?php echo site_url('/manage_schoolRegister/Check')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            name :function(){return $("#name").val();}
                        }
                    },
                    required :true,
                    username :true
                },
                tel :{
                    remote :{
                        url :"<?php echo site_url('/manage_schoolRegister/Check')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            tel :function(){return $("#tel").val();}
                        }
                    },
                    required :true,
                    isPhone :true
                },
                licence :{
                    remote :{
                        url :"<?php echo site_url('/manage_schoolRegister/Check')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            licence :function(){return $("#licence").val();}
                        }
                    },
                    required :true
                },
                img :{
                    required :true
                }

            },
            messages :{
                nickname: {
                    required :"账号名不能为空",
                    remote :"该账号名已存在"
                },
                school_name :{
                    required :"请填写驾校名字",
                    remote :"该驾校名已被注册"
                },
                password: {
                    required :"密码不能为空"
                },
                confirm_password: {
                    required :"请再次输入密码",
                    equalTo :"请确保密码一致"
                },
                name: {
                    required :"联系人姓名不能为空",
                    remote :"该联系人姓名已被使用"
                },
                tel :{
                    required :"手机号码不能为空",
                    isPhone :"请正确填写您的手机号码",
                    remote :"该电话号码已被使用"
                },
                licence :{
                    required :"请填写营业执照号码",
                    remote :"该营业执照号码已被使用"
                },
                img :{
                    required :"请上传照片"
                }
            },
            errorPlacement: function(error,element) {
                element.next("span").empty();
                element.next("span").css('color','red');
                error.appendTo(element.next("span"));
            }
        });
        new uploadPreview({ UpBtn: "img", DivShow: "imgDiv", ImgShow: "imgShow" });

        $(".submit").click(function(){
            $.ajax({
                type :"POST",
                url :"<?php echo site_url('/manage_schoolRegister/Login') ?>",
                data :$("#form-login").serialize(),
                dataType: "json",
                success :function(data){
                    if(data.code){
                        alert(data.msg);
                        location.reload();
                    }else{
                        window.location.href="<?php echo site_url('school/introductionAdmin')?>";
                    }
                }
            });
        });

        <?php
            if(!empty($flag)){
                echo 'alert("报名成功")';
             }
        ?>

        $("#img").click(function(){
            $(".fileupload").fadeIn();
        });

        function goToForm(form)
        {
            $('.login-wrapper > form:visible').fadeOut(500, function(){
                $('#form-' + form).fadeIn(500);
            });
        }
        $(function() {
            $('.goto-login').click(function(){
                goToForm('login');
            });
            $('.goto-register').click(function(){
                goToForm('register');
            });
        });
    });
</script>

</body>
</html>
