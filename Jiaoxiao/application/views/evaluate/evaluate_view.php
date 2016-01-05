<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>学员评价</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->

    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/component.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/bootstrap-stars.css">


</head>
<body>

<!-- 登录表单 -->
<div class="md-modal md-effect-7" id="login">
    <div class="md-content">
        <h3>用户登录</h3>
        <div>
            <form  class="form-horizontal"  >
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

<!--评价表单-->
<div class="md-modal md-effect-12" id="modal-12">
    <div class="md-content-evaluate">
        <div>
            <form  class="form-horizontal" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-file"></i> 学员评价</h3>
                                <a class="btn btn-danger" style="float: right" id="close">关闭</a>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-6 user-profile-info">
                                        <img class="img-responsive img-thumbnail" id="c_img" src="#" alt="profile picture" />

                                        <p><h4>教练星级:</h4> </p>
                                            <select id="coach-star" name="rating">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                    </div>
                                    <div class="col-md-6 user-profile-info">
                                        <p id="c_name"></p>
                                        <p id="s_name"></p>
                                        <p id="s_url">驾校官方网址: <a href="#">http://www.baidu.com</a></p>
                                        <p id="c_phone"></p>
                                        <p>评分:
                                            <select id="evaluate-star" name="rating">
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </p>
                                        <p>学员留言: <textarea class="form-control" rows="8" id="remark"></textarea></p>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1 col-sm-offset-10  col-lg-1 col-lg-offset-10 ">
                                        <button type="submit" class="btn btn-primary" id="submit"  >提交评价</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!--评价表单-->



    <!-- BEGIN Navbar -->
    <div id="navbar" class="navbar">
        <a class="navbar-brand" href="#">
            <small>
                <i class="icon-desktop"></i>
                学员评价
            </small>
        </a>



        <!-- 学员登录按钮 -->
        <ul class="nav flaty-nav pull-right">
            <?php $userData=$this->session->userData;?>
            <?php if($userData) {?>
            <li>
                <a  class="md-trigger" >
                    欢迎来到蓝光驾校，<?=$userData['nickname']?>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('evaluate/logout')?>" class="md-trigger" >
                    <i class="icon-off"></i>
                </a>
            </li>
            <?php }else {?>
            <li>
                <a href="#" class="md-trigger" data-modal="login" id="user" value="login" >
                    登录
                </a>
            </li>
            <?php }?>
        </ul>
        <!-- 学员登录按钮 -->

    </div>
    <!-- END Navbar -->





<!-- 预约内容介绍 -->
<div class="container" id="main-container" >
    <div id="main-content" >
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1>蓝光驾校欢迎您</h1>
                <h4>驾校标语</h4>
            </div>
        </div>
        <!-- END Page Title -->

        <!-- 教练评价 -->
        <div class="row" >
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>教练列表</h3>
                    </div>

                    <div class="box-content">

                        <div class="table-responsive">
                            <table class="table table-advance">
                                <thead>
                                <tr>
                                    <th >教练编号</th>
                                    <th >教练名字</th>
                                    <th class="text-center" style="width:130px">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($dataCoach):?>
                                    <?php foreach($dataCoach as $coach):?>
                                        <tr class="table-flag-blue">
                                            <td ><?=$coach['id']?></td>
                                            <td ><?=$coach['c_name']?></td>

                                            <td class="text-center">
                                                <a href="#" class="md-trigger btn btn-primary evaluate" data-modal="modal-12"  data-id="<?=$coach['id']?>">评价</a>
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
        <!-- 教练评价 -->


        <footer>
            <p>2015 ? 蓝光驾校.</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
    </div>
</div>

<div class="md-overlay"></div>
</body>
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



<!--flaty scripts-->
<script src="<?php echo base_url()?>/js/flaty.js"></script>
<script src="<?php echo base_url()?>/js/classie.js"></script>
<script src="<?php echo base_url()?>/js/modalEffects.js"></script>
<script src="<?php echo base_url()?>/js/jquery.barrating.js"></script>

<script>
    $(document).ready(function(){


        $(".evaluate").click(function(){
            $("#submit").removeAttr('data-id');
            var id="";
            $("#modal-12").addClass('md-show');

            var id=$(this).data('id');
            $.ajax({
                type:"POST",
                url: '<?php echo site_url('/evaluate/getCoachInfo')?>',
                data:{
                    coachID:id
                },
                dataType:"json",
                success: function(data){

                    $("#c_img").attr('src','<?php echo base_url()?>/images/'+data.data[0]['img']);

                    $('#coach-star').barrating({
                        theme: 'bootstrap-stars',
                        readonly:true,
                        showSelectedRating: false
                    });
                    $('select#coach-star').barrating('set', data.data[0]['star']);

                    $("#c_name").empty();
                    $("#c_name").html('教练名: '+data.data[0]['c_name']);

                    $("#s_name").empty();
                    $("#s_name").html('所属驾校: '+data.data[0]['school_name']);

                    $("#s_url").empty();
                    $("#s_url").html('驾校官方网址: <a target="_blank" href="'+data.data[0]['school_url']+'">'+data.data[0]['school_url']+'</a>');

                    $("#c_phone").empty();
                    $("#c_phone").html('教练电话: '+data.data[0]['tel']);

                    $("#submit").attr('data-id',id);

                }
            });
        });

        $("#submit").click(function(){

            var userid="<?=$userData['id']?>";
            var coachid=$(this).data('id');
            var star=$("#evaluate-star").val();
            var remark=$("#remark").val();
            if(userid){
                if(star){
                    $.ajax({
                        type:"POST",
                        url: '<?php echo site_url('/evaluate/acceptEvaluate')?>',
                        data:{
                            userID:userid,
                            coachID:coachid,
                            star:star,
                            remark:remark
                        },
                        dataType:"json",
                        success: function(data){
                            alert(data.msg);
                            location.reload();
                        }
                    });
                }else{
                    alert('请进行评价再进行提交');
                }

            }else{
                alert('请先登录再进行评价');
                return false;
            }
        });

        $(".md-overlay").click(function(){
            $("#modal-12").removeClass('md-show');
        });

        $("#close").click(function(){
            $("#modal-12").removeClass('md-show');
        });

        $('#evaluate-star').barrating({
            theme: 'bootstrap-stars',
            showSelectedRating: false
        });

        

        /**
         * 用户登录验证ajax
         */
        $("#log_in").click(function() {
            var nickname=$("#nickname").val();
            var password=$("#password").val();
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('evaluate/login')?>',
                data: {
                    nickname:nickname,
                    password:password
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        });
    });
</script>
</html>
