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

    <style>
        input.error {
            border:1px solid red;
        }
    </style>

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
    <a class="navbar-brand col-md-offset-1" href="#">
        <small>
            <i class=""></i>
            蓝光驾校
        </small>
    </a>
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">

    <!-- BEGIN Content -->
    <div id="main-content">

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="box">
                    <div class="box-title">
                        <h3> 蓝光驾校网上报名</h3>
                        <div class="box-tool">
                            <a href="<?php echo site_url('/main/goMain')?>" class="btn btn-primary" ><i class="icon-home"></i> 首页</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form action="" class="form-horizontal" id="register_form" method="post">

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
                                <div class="col-sm-9 col-lg-10 controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px;">
                                            <img  id="imgShow" style="width: 428px; height: 270px;" />
                                        </div>
                                        <input type="file" id="img" class="form-control default" name="img"  style="width: 428px;" />
                                    </div>
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <hr>

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
                                    <input type="submit" class="btn btn-primary" value="报名">
                                    <button type="reset" class="btn">重置</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-user"></i> 预约登录</h3>
                    </div>
                    <?php if($this->session->nickname) :?>
                    <div class="box-content" >
                        <div class="alert alert-info">
                            <h4>蓝光驾校欢迎您，<?=$this->session->nickname; ?></h4><br/>
                            <p><a class="btn btn-primary" href="<?php echo site_url('/appointment/appointmentmodel')?>">点击进入预约页面 >></a> &nbsp;<a class="btn btn-danger" id="logout"><i class="icon-off"></i> 注销</a></p>
                        </div>
                    </div>
                    <?php else :?>
                    <div class="box-content">
                        <form action="" class="form-horizontal" id="login_form" method="post" >
                            <div class="form-group">
                                <label for="user_nickname" class="sr-only">账号名</label>
                                <div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-1 controls">
                                    <input type="text" name="user_nickname" id="user_nickname" class="form-control" placeholder="账号名" value="<?php if(!empty($_COOKIE['nickname'])){echo $_COOKIE['nickname'];}else{echo "";} ?>" />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <label for="user_password" class="sr-only">密码</label>
                                <div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-1 controls">
                                    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="账号密码" />
                                </div>
                                <label class="control-label" style="color:red"></label>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-1 controls">
                                    <label class="checkbox">
                                        <input type="checkbox" id="check" value="1" name="check" /> 记住账号
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-1">
                                    <input type="submit" class="btn btn-primary" value="登录">
                                    <button type="reset" class="btn">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-list"></i> 驾校教练排名</h3>
                    </div>
                    <div class="box-content">
                        <ul class="messages nice-scroll" style="height: 400px">
                            <li>
                                <img src="img/demo/avatar/avatar2.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>David</h5>
                                        <span class="time"><i class="icon-time"></i> 26 minutes ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure ...</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar3.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Sarah</h5>
                                        <span class="time"><i class="icon-time"></i> 1 days ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar4.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Emma</h5>
                                        <span class="time"><i class="icon-time"></i> 4 days ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar5.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>John</h5>
                                        <span class="time"><i class="icon-time"></i> 2 weeks ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem...</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar1.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Penny <span class="label label-info">Admin</span></h5>
                                        <span class="time"><i class="icon-time"></i> 14 July</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="box box-blue">

                    <div class="box-title">
                        <h3><i class="icon-list"></i> 驾校新闻</h3>
                    </div>
                    <div class="box-content">
                        <ul class="messages nice-scroll" style="height: 370px">
                            <li>
                                <img src="img/demo/avatar/avatar2.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>David</h5>
                                        <span class="time"><i class="icon-time"></i> 26 minutes ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure ...</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar3.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Sarah</h5>
                                        <span class="time"><i class="icon-time"></i> 1 days ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar4.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Emma</h5>
                                        <span class="time"><i class="icon-time"></i> 4 days ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar5.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>John</h5>
                                        <span class="time"><i class="icon-time"></i> 2 weeks ago</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem...</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img src="img/demo/avatar/avatar1.jpg" alt="">
                                <div>
                                    <div>
                                        <h5>Penny <span class="label label-info">Admin</span></h5>
                                        <span class="time"><i class="icon-time"></i> 14 July</span>
                                    </div>
                                    <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                    <div class="messages-actions">
                                        <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                        <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                        <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <!-- END Main Content -->


        <!-- END Content -->
        <footer>
            <p>2015 © 蓝光驾校</p>
        </footer>

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

<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>
<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script>
    $(document).ready(function(){
        $("#register_form").submit(function(){
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('/register/Save')?>',
                data: $(this).serialize(),
                dataType: "json",
                success : function (data) {
                    if(data){
                        alert('报名成功');
                        location.reload();
                    }else{
                        alert('报名失败');
                        location.reload();
                    }
                }
            });
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



    });
</script>

</body>
</html>
