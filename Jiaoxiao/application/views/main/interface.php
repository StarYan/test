<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>珠海网上驾校</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>css/component.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/flaty-responsive.css">

    <style>
        .interface > div{
            padding: 30px;
        }

        .interface > div:hover{
            transition:border linear .2s,box-shadow linear .5s;
            -moz-transition:border linear .2s,-moz-box-shadow linear .5s;
            -webkit-transition:border linear .2s,-webkit-box-shadow linear .5s;
            outline:none;
            border-color:rgba(88,177,252,.75);
            box-shadow:0 0 28px rgba(88,177,242,.5);
            -moz-box-shadow:0 0 28px rgba(88,177,242,.5);
            -webkit-box-shadow:0 0 28px rgba(88,177,242,3);
        }


        .ranking > li{
            padding-top:5px;
            padding-bottom:5px;
        }

        .ranking > li:hover{
            transition:border linear .2s,box-shadow linear .5s;
            -moz-transition:border linear .2s,-moz-box-shadow linear .5s;
            -webkit-transition:border linear .2s,-webkit-box-shadow linear .5s;
            outline:none;
            border-color:rgba(88,177,252,.75);
            box-shadow:0 0 28px rgba(88,177,242,.5);
            -moz-box-shadow:0 0 28px rgba(88,177,242,.5);
            -webkit-box-shadow:0 0 28px rgba(88,177,242,3);
        }

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

        .news-content{
            padding: 0 0 0 30px;
        }

        .news{
            padding: 0;
            margin: 0;
        }

        .news > li{
            margin-top: 10px;
            padding: 0;
        }

        .news > li :hover{
            color: rgb(88,177,242);
        }

        .navbar{
            height: 270px;
        }

        @media (max-width: 767px) {
            .news-content{
                padding: 0;
                margin-top: 3%;
            }

            .navbar{
                height: 70px;
            }
        }

    </style>

</head>
<body >
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
                            <a href="<?php echo site_url('/main/goInterface') ?>"><h4><i class="icon-home"></i> 驾校首页
                                </h4></a>
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


        <div class="row text-center hidden-sm hidden-xs" style="margin: 8% auto">
            <div style="color: white;">
                <h1><strong>珠海网上驾校欢迎您</strong></h1>
                <br/>
                <p><h2>微笑是我们的语言，文明是我们的信念，教学是我们的责任，成功是我们的心愿</h2></p>
            </div>
        </div>
    </div>

</div>
<!-- END Navbar -->


<div class="container" style="margin-top: 3%;">
        <div class="row text-center col-md-10 col-md-offset-1 interface">
            <div class="col-xs-12 col-sm-12 col-md-4" >
                <a href="<?php echo site_url('/main/goMain')?>" rel="prettyPhoto" title="学车入口">
                    <div>
                        <span class="glyphicon glyphicon-road" style="font-size: 85px; color: rgb(88,177,242);"></span>
                    </div>
                </a>
                <h3><strong style="color:rgba(88,177,252,.75);"><a href="<?php echo site_url('/main/goMain')?>" rel="prettyPhoto" title="学车入口">学车入口</a></strong></h3>
                <p>
                    进行网上报名、网上预约和学员评价功能操作
                </p>

            </div>

            <div class="col-xs-12 col-sm-12  col-md-4" >
                <a href="<?php echo site_url('/manage_schoolRegister/goRegister')?>" rel="prettyPhoto" title="驾校入口">
                    <div>
                        <span class="glyphicon glyphicon-log-in" style="font-size: 85px; color: rgb(88,177,242);"></span>
                    </div>
                </a>

                <h3><strong style="color:rgba(88,177,252,.75);"><a href="<?php echo site_url('/manage_schoolRegister/goRegister')?>" rel="prettyPhoto" title="驾校入口">驾校入口</a></strong></h3>
                <p>
                    进入注册驾校平台
                </p>
            </div>

            <div class="col-xs-12 col-sm-12  col-md-4" >
                <a href="http://www.zhits.com.cn/view/main.html?menu=13" rel="prettyPhoto" title="行业管理">
                    <div>
                        <span class="glyphicon glyphicon-cog" style="font-size: 85px; color: rgb(88,177,242);"></span>
                    </div>
                </a>
                <h3><strong style="color:rgba(88,177,252,.75);"><a href="http://www.zhits.com.cn/view/main.html?menu=13" rel="prettyPhoto" title="行业管理">行业管理</a></strong></h3>
                <p>
                    进入珠海交通信息综合服务平台
                </p>
            </div>


        </div>
</div>


<div class="container" style="margin-top: 5%;">
    <div class="row col-md-10 col-md-offset-1">
        <div id="carousel-example-generic" class="carousel slide col-md-5" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="http://news.china.com/domestic/945/20151210/20909862.html" target="_blank">
                        <img src="<?php echo base_url()?>/images/news01.jpg" style="height: 274px;" alt="...">
                        <div class="carousel-caption" style="left: 0;right: 0;">
                            <h5 style="background-color: rgba(0,0,0,0.5);padding: 10px;">不用去驾校：中国将试点小汽车驾驶人自学直考</h5>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="http://news.51jiaxiao.com/article/7130.html" target="_blank">
                        <img src="<?php echo base_url()?>/images/news02.jpg" style="height: 274px;" alt="...">
                        <div class="carousel-caption" style="left: 0;right: 0;">
                            <h5 style="background-color: rgba(0,0,0,0.5);padding: 10px;">男子花1.5万元驾考作弊 科目一刚开考就被抓</h5>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="http://news.51jiaxiao.com/article/7100.html" target="_blank">
                        <img src="<?php echo base_url()?>/images/news03.jpg" style="height: 274px;" alt="...">
                        <div class="carousel-caption" style="left: 0;right: 0;">
                            <h5 style="background-color: rgba(0,0,0,0.5);padding: 10px;">驾驶培训教学与考试大纲修改研讨会在北京召开</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="col-md-7 news-content">
            <div class="container">
                <div class="row col-md-4 text-center" style="background-color: rgb(88,177,242);color: white; margin-bottom:0px;  ">
                    <h4>热点资讯</h4>
                </div>
            </div>

            <div class="col-md-12" style="background-color: rgb(88,177,242);"></div>

            <ul style="list-style: none" class="news">

            </ul>
        </div>
    </div>
</div>


<div class="container" style="margin-top: 5%;">
    <div class="row col-md-10 col-md-offset-1">
        <div class="hidden-md hidden-sm hidden-lg col-xs-12" style="background-color: rgba(88,177,252,.75);color:white;height: 50px;padding:1px;">
            <h2>驾校考试通过率排名<span><a href="#" class="btn btn-primary" style="float: right">更多</a></span></h2>
        </div>

        <div class="hidden-xs col-sm-4 col-md-4 text-center" style="height: 300px;background-color:rgba(88,177,252,.75);color:white; padding:50px;">
            <h2>驾校考试通过率排名</h2>
            <p style="margin: 30px;"><h4>通过每个驾校的考试通过率对驾校进行排名，并显示前三名驾校的信息</h4></p>
            <br/>
            <a href="" class="btn btn-primary"><h4>查看更多信息</h4></a>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <ul class="iconic  pass_rate ranking" style="height: 300px">
            </ul>
        </div>
    </div>

    <div class="row col-md-10 col-md-offset-1" style="margin-top: 7%">
        <div class="hidden-md hidden-sm hidden-lg col-xs-12" style="background-color: rgba(88,177,252,.75);color:white;height: 50px;padding:1px;">
            <h2>驾校打分分数排名<span><a href="#" class="btn btn-primary" style="float: right">更多</a></span></h2>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8">
            <ul class="iconic  score ranking" style="height: 300px">
            </ul>
        </div>

        <div class="hidden-xs col-sm-4 col-md-4 text-center" style="height: 300px;background-color:rgba(88,177,252,.75);color:white; padding:50px;">
            <h2>驾校打分分数排名</h2>
            <p style="margin: 30px;"><h4>通过每个驾校的打分分数对驾校进行排名，并显示前三名驾校的信息</h4></p>
            <br/>
            <a href="#" class="btn btn-primary"><h4>查看更多信息</h4></a>
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
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url()?>assets/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>assets/sparkline/jquery.sparkline.min.js"></script>



    <!--flaty scripts-->
    <script src="<?php echo base_url()?>js/flaty.js"></script>
    <script src="<?php echo base_url()?>js/classie.js"></script>
    <script src="<?php echo base_url()?>js/modalEffects.js"></script>

<script>
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_news/show')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".news").empty();
                if(data.code==0){
                    for (var i = 0; i < 8; i++){
                        var str = '<li><a href="'+data.data[i]['link']+
                            '" target="_blank" style="color: black; font-size: 14px;"><span style="font-weight: 700;color: rgb(88,177,242);">• &nbsp;</span><span> '+data.data[i]['title']
                            +' </span></a><span class="pull-right">'+data.data[i]['create_date']
                            +'</span></li>';
                        $(".news").append(str);
                    }
                }else{
                    alert(data.msg);
                }

            }
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_ranking/showRankingByPassRate')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".pass_rate").empty();
                if(data.code==0){
                    for (var i = 0; i < 3; i++){
                        var str='<li><div><dl><dt><h4><strong><span class="label label-info">'+(i+1)+'</span> <a href="#">'+data.data[i]['school_name']+'</a></strong></h4></dt> <dd style="margin-top:20px;">考试通过率 : '+data.data[i]['pass_rate']+'% <a target="_blank" href="'+data.data[i]['school_url']+'" class="btn btn-primary" style="float: right;margin-right: 10px;">进入驾校官网 <i class="icon-chevron-right"></i></a></dd></dl></div></li>';
                        $(".pass_rate").append(str);
                    }
                }else{
                    alert(data.msg);
                }

            }
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_ranking/showRankingByScore')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".score").empty();
                if(data.code==0){
                    for (var i = 0; i < 3; i++){
                        var str='<li><div><dl><dt><h4><strong><span class="label label-info">'+(i+1)+'</span> <a href="#">'+data.data[i]['school_name']+'</a></strong></h4></dt> <dd style="margin-top:20px;">驾校分数 : '+data.data[i]['score']+'分 <a target="_blank" href="'+data.data[i]['school_url']+'" class="btn btn-primary" style="float: right;margin-right: 10px;">进入驾校官网 <i class="icon-chevron-right"></i></a></dd></dl></div></li>';
                        $(".score").append(str);
                    }
                }else{
                    alert(data.msg);
                }

            }
        });
    });
</script>

</body>
</html>
