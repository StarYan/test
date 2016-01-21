<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>蓝光驾校</title>
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
            -webkit-box-shadow:0 0 28px rgba(88,177,242,.5);
            background-color: rgba(52, 152, 219,.2);
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
                            <a href=""><h4><i class="icon-file-text"></i> 驾校简介</h4></a>
                        </li>

                        <li>
                            <a href="#"><h4><i class="icon-phone"></i> 联系我们</h4></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>


        <div class="row text-center hidden-sm hidden-xs" style="margin: 8% auto">
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

<div class="container" style="margin-top: 5%">
    <div class="row text-center col-md-10 col-md-offset-1 interface">
        <div class="col-xs-12 col-sm-12 col-md-3 " >
            <a href="<?php echo site_url('register/goRegister')?>" rel="prettyPhoto" title="在线报名">
                <div>
                    <i class="icon-list-alt" style="font-size: 85px; color: rgb(88,177,242);"></i>
                </div>
            </a>
            <h3><strong ><a href="<?php echo site_url('register/goRegister')?>" rel="prettyPhoto" title="在线报名" style="color:black;">在线报名</a></strong></h3>
            <p>
                进入在线报名操作页面
            </p>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 " >
            <a href="#" rel="prettyPhoto" title="科目一视频培训">
                <div>
                    <i class="icon-film" style="font-size: 85px; color: rgb(88,177,242);"></i>
                </div>
            </a>
            <h3><strong ><a href="#>" rel="prettyPhoto" title="科目一视频培训" style="color:black;">科目一视频培训</a></strong></h3>
            <p>
                进入科目一视频培训页面
            </p>

        </div>


        <div class="col-xs-12 col-sm-12  col-md-3" >
            <a href="<?php echo site_url('appointment/index')?>" rel="prettyPhoto" title="网上预约">
                <div>
                    <i class="icon-laptop" style="font-size: 85px; color: rgb(88,177,242);"></i>
                </div>
            </a>

            <h3><strong ><a href="<?php echo site_url('appointment/index')?>" rel="prettyPhoto" title="网上预约" style="color:black;">网上预约</a></strong></h3>
            <p>
                进入网上预约操作页面
            </p>
        </div>


        <div class="col-xs-12 col-sm-12  col-md-3" >
            <a href="<?php echo site_url('/evaluate/index')?>" rel="prettyPhoto" title="学员评价">
                <div>
                    <i class="icon-star" style="font-size: 85px; color: rgb(88,177,242);"></i>
                </div>
            </a>
            <h3><strong ><a href="<?php echo site_url('/evaluate/index')?>" rel="prettyPhoto" title="学员评价" style="color:black;">学员评价</a></strong></h3>
            <p>
                进入学员评价操作页面
            </p>
        </div>

    </div>


</div>


<div class="container" style="margin-top: 8%;">
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



    });
</script>

</body>
</html>
