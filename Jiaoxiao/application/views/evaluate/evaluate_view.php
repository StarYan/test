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
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->

    <link rel="stylesheet" href="<?php echo base_url() ?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/flaty-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/component.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap-stars.css">
    <script src="<?php echo base_url() ?>/js/jquery.barrating.js"></script>

    <style>
        .profile-body {
            padding: 20px;
            background: #f7f7f7;
            height: 240px;
        }

        .nav-tabs.nav-justified {
            width: 100%;
        }

        .nav-tabs.nav-justified > li > a {
            margin-bottom: 0;
        }

        .nav-tabs > li > a, .nav-pills > li > a, .nav-tabs.nav-justified > li > a {
            border-radius: 0;
        }

        .tab-v1 .nav-tabs a {
            font-size: 14px;
            padding: 5px 15px;
        }

        p, li, li a, label {
            color: #555;
        }

        .tab-v1 .nav-tabs > .active > a, .tab-v1 .nav-tabs > .active > a:hover, .tab-v1 .nav-tabs > .active > a:focus {
            color: #fff;
            border: solid 1px rgb(88, 177, 252);
            background: rgb(88, 177, 252);
        }

        .tab-v1 .nav-tabs {
            border-bottom: solid 2px rgb(88, 177, 252);
        }

        .tab-v1 .nav-tabs > li > a:hover {
            color: #fff;
            background: rgb(88, 177, 252);
            border: solid 1px rgb(88, 177, 252);
        }

        .tab-v1 {
            margin: 0;
            padding: 0 0 0 20px;

        }

        .profile-edit {
            padding: 10px;
            background: #fff;
            height: 166px;
        }

        .profile-edit > div {
            margin: 10px;
        }

        .profile-edit > div > strong {
            color: rgb(88, 177, 252);
        }

        .profile-edit > form {
            padding: 10px;
        }

        .profile-edit > form > div {
            margin-bottom: 10px;
        }

        .nav-header{
            margin: 0;
            width: 240.828px;
            color: white;
            height: 240px;
            background-color: rgba(88,177,252,1);
            padding: 40px;
        }


        .logout{
            color: white;
        }

        .nav-header > a:hover{
            text-decoration: underline;
            color: white;
        }



        .box-content {
            margin-top: 4%;
            border: 1px solid #f7f7f7;

        }

        .coach-rank-list {
            padding: 0px;
            list-style: none;
            margin: 0;
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

        .br-theme-bootstrap-stars .br-widget a {
            font: normal normal normal 10px/1 'Glyphicons Halflings';
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            text-decoration: none;
            margin-right: 2px;
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
            height: 270px;
        }


        @media (max-width: 767px) {
            .profile-body {
                padding: 20px;
                background: #f7f7f7;
                height: 480px;
            }
            .tab-v1 {
                margin: 0;
                padding: 0px;

            }
            .profile-edit {
                padding: 0;
                background: #fff;
                height: 166px;
            }

            .profile-edit > div {
                margin: 3px 0 3px 0;
            }

            .profile-edit > form > div {
                margin-bottom: 0;
            }

            .tab-v1 .nav-tabs {
                border: none;
            }


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


        <div class="row text-center  hidden-xs" style="margin: 8% auto">
            <div style="color: white;">
                <h1><strong>珠海网上驾校欢迎您</strong></h1>
                <br/>

                <p>

                <h2>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</h2></p>
            </div>
        </div>
    </div>

</div>
<!-- END Navbar -->


<!-- 预约内容介绍 -->
<div class="container" style="margin-top: 5%">
    <div class="row col-md-10 col-md-offset-1">
        <div class="col-xs-12 col-md-3">
            <ul class="nav nav-sidebar" style="height: 240px;" >
                <div class="col-md-12 text-center nav-header" >
                    <i class="icon-user" style="font-size: 100px;"></i>
                    <p><h4><?php echo $ndata = $this->session->nickname;?></h4></p>
                    <a class='logout' href='#'>[ 退出 ]</a>
                </div>

            </ul>
            <br />
            <div class="hidden-xs coach-ranking">
                <div class="container " >
                    <div class="row box-content" style="border: none;color: black;  ">
                        <h3>人气教练</h3>
                    </div>
                </div>
                <div class="box-content ">
                    <ul class="coach-rank-list">
                    </ul>
                </div>
            </div>
        </div>
        <!-- 教练评价 -->
        <div class="col-md-9">
            <?php if ($dataCoach): ?>
                <?php foreach ($dataCoach as $coach): ?>
                    <div class="profile-body">
                        <div class="col-md-3 text-center" style="background-color: white;height: 200px;padding: 20px">
                            <img src="<?php echo base_url() ?>/images/teacher-male.png"/>
                            <h4><strong><?php echo $coach['c_name']; ?></strong></h4>

                            <p><strong>教练ID</strong></p>
                        </div>

                        <div class="tab-v1 col-md-9">
                            <ul class="nav nav-justified nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#coach-detail-<?php echo $coach['id']; ?>">教练详情</a>
                                </li>
                                <li><a data-toggle="tab" href="#coach-evaluation-<?php echo $coach['id']; ?>">学员评价</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="coach-detail-<?php echo $coach['id']; ?>"
                                     class="profile-edit tab-pane fade in active">
                                    <div class="col-xs-12 col-md-3 "><strong>教练价格：</strong></div>
                                    <div class="col-xs-12 col-md-8"><?php echo $coach['price']; ?>/小时</div>
                                    <div class="col-xs-12 col-md-3 "><strong>教练电话：</strong></div>
                                    <div class="col-xs-12 col-md-8"><?php echo $coach['tel']; ?></div>
                                    <div class="col-xs-12 col-md-3 "><strong>所属驾校：</strong></div>
                                    <div class="col-xs-12 col-md-8"><?php echo $coach['school_name']; ?></div>
                                    <div class="col-xs-12 col-md-3 "><strong>教练星级：</strong></div>
                                    <div class="col-xs-12 col-md-8">
                                        <select id="coach-star-<?php echo $coach['id']; ?>" name="rating">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="coach-evaluation-<?php echo $coach['id']; ?>" class="profile-edit tab-pane fade">
                                    <form action="" method="post" class="form-horizontal evaluation-form">
                                        <input hidden type="text" name="userID" value="<?php echo $this->session->id; ?>">
                                        <input hidden type="text" name="coachID" value="<?php echo $coach['id']; ?>">
                                        <div class="col-xs-12 col-md-3"><strong>学员评分：</strong></div>
                                            <div class="col-xs-12 col-md-9">
                                                <select id="evaluate-star-<?php echo $coach['id']; ?>" name="star">
                                                    <option value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>

                                        <div class="col-xs-12 col-md-3"><strong>学员留言：</strong></div>
                                        <div class="col-xs-12 col-md-9"><textarea class="form-control" rows="2" name="remark"></textarea></div>

                                        <input type="button" class="btn btn-primary col-md-3 pull-right submit" value="提交">

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br />
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="text-center"><?php echo $link;?></div>
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
                    '<span class="col-md-4 list-coach-name">'+data.data[0]['c_name']+'</span>'+
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
                    '<p><a href="#" class="btn btn-primary pull-left">查看</a></p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str1);

                var str2='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<a href="#">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(230, 126, 34,1.0)">'+2+'</span>'+
                    '<span class="col-md-4 list-coach-name">'+data.data[1]['c_name']+'</span>'+
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
                    '<p><a href="#" class="btn btn-primary pull-left">查看</a></p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str2);

                var str3='<li data-list-collapse="accordion" >'+
                    '<div class="container rank-list-title">'+
                    '<a href="#">'+
                    '<span class="col-md-3 rank-list-num" style="background-color: rgba(241, 196, 15,1.0)">'+3+'</span>'+
                    '<span class="col-md-4 list-coach-name">'+data.data[2]['c_name']+'</span>'+
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
                    '<p><a href="#" class="btn btn-primary pull-left">查看</a></p>'+
                    '</div>'+
                    '</div>'+
                    '</li>';
                $(".coach-rank-list").append(str3);

                for(var i=3;i < 10;i++){
                    var str='<li data-list-collapse="accordion">'+
                        '<div class="container rank-list-title">'+
                        '<a target="_blank" href="#">'+
                        '<span class="col-md-3 rank-list-num">'+(i+1)+'</span>'+
                        '<span class="col-md-4 list-coach-name">'+data.data[i]['c_name']+'</span>'+
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
                        '<p><a target="_blank" href="#" class="btn btn-primary pull-left">查看</a></p>'+
                        '</div>'+
                        '</div>'+
                        '</li>';
                    $(".coach-rank-list").append(str);
                }

                $("ul.coach-rank-list li:last").css("border-bottom","none");


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


        <?php if($dataCoach):?>
        <?php foreach($dataCoach as $coach):?>
        $('#evaluate-star-<?php echo $coach['id'];?>').barrating({
            theme: 'bootstrap-stars',
            showSelectedRating: false
        });

        $('#coach-star-<?php echo $coach['id'];?>').barrating({
            theme: 'bootstrap-stars',
            readonly: true,
            showSelectedRating: false
        });
        $('select#coach-star-<?php echo $coach['id'];?>').barrating('set', <?php echo $coach['star'];?>);
        <?php endforeach;?>
        <?php endif;?>


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
                url: '<?php echo site_url('evaluate/logout')?>',
                data: {
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    window.location.href="<?php echo site_url('evaluate/index')?>";
                }
            });
        });
    });
</script>
</html>
