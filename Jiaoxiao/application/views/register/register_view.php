<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Full Width Page - FLATY Admin</title>
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
</head>
<body>
<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="icon-reorder"></span>
    </button>
    <a class="navbar-brand" href="#">
        <small>
            <i class="icon-desktop"></i>
            蓝光驾校
        </small>
    </a>


</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1> 网上报名</h1>
                <h4></h4>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="#">首页</a>
                    <span class="divider"></span>
                </li>
                <li class="active"></li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="icon-edit"></i> 填写报名信息</h3>
                    </div>
                    <div class="box-content">
                            <form action="<?php echo site_url('/register/Save')?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-wizard" id="form-wizard-2">
                                    <ul class="row steps steps-fill">
                                        <li class="col-md-3">
                                            <a href="#tab2-1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> 账号密码</span>
                                            </a>
                                        </li>
                                        <li class="col-md-3">
                                            <a href="#tab2-2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> 个人信息</span>
                                            </a>
                                        </li>
                                        <li class="col-md-3">
                                            <a href="#tab2-3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i> 上传照片</span>
                                            </a>
                                        </li>
                                        <li class="col-md-3">
                                            <a href="#tab2-4" data-toggle="tab" class="step">
                                                <span class="number">4</span>
                                                <span class="desc"><i class="icon-ok"></i> 报名信息</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-primary"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab2-1">
                                            <div class="form-group">
                                                <label for="nickname" class="col-sm-3 col-lg-2 control-label">账号名</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="nickname" id="nickname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-3 col-lg-2 control-label">密码</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="password" id="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-2">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 col-lg-2 control-label">姓名</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="name" id="name" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">性别</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="sex" value="男"> 男
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="sex" value="女"> 女
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label" for="birthday">出生日期</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input class="form-control date-picker" size="16" type="text" name="birthday" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="id" class="col-sm-3 col-lg-2 control-label">身份证号</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="id" id="id" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="phone" class="col-sm-3 col-lg-2 control-label">手机号码</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="phone" id="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="qq" class="col-sm-3 col-lg-2 control-label">QQ</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="qq" id="qq" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 col-lg-2 control-label">Email</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <input type="text" name="email" id="email" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="address" class="col-sm-3 col-lg-2 control-label">住址</label>
                                                <div class="col-sm-5 col-lg-3 controls">
                                                    <textarea name="address" id="address" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="tab2-3">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">上传身份证照片</label>
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new img-thumbnail" style="width: 428px; height: 270px;">
                                                            <img src="#" alt="" />
                                                        </div>
                                                        <input type="file" class="form-control default" name="img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2-4">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label" for="original_car_type">原准驾车型</label>
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <input type="text" name="original_car_type" id="original_car_type" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">培训类别</label>
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <select class="form-control  chosen"  tabindex="1" id="select1">
                                                        <option selected>-- 请选择培训类别 --</option>
                                                        <option value="type1">普通机动车驾驶员培训</option>
                                                        <option value="type2">道路运输驾驶员从业资格培训</option>
                                                        <option value="type3">其他培训</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 col-lg-2 control-label">培训车型</label>
                                                <div class="col-sm-9 col-lg-10 controls">
                                                    <select class="form-control  chosen" name="wanted_car_type" id="select2">

                                                    </select>
                                                    <input type="text" style="display:none" id="others" class="form-control"  />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                            <a href="#" class="btn button-previous">返回</a>
                                            <a href="#" class="btn btn-primary button-next">下一步</a>
                                            <button  class="btn btn-primary button-submit" type="submit">提交</button>
                                            <button  class="btn btn-danger button-submit" type="reset">重置</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- END Main Content -->

        <footer>
            <p>2015  蓝光驾校.</p>
        </footer>
        <br/> <br/> <br/>
        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
    </div>
    <!-- END Content -->
</div>
<!-- END Container -->


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

</body>
</html>
