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


</head>
<body style="background: rgb(233,240,249);">



<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <a class="navbar-brand" href="#">
        <small>
            <i class="icon-desktop"></i>
            蓝光驾校
        </small>
    </a>
</div>
<!-- END Navbar -->

<!-- BEGIN Page Title -->
<div class="page-title" >
    <div>
        <h1>蓝光驾校欢迎您</h1>
        <h4>驾校标语</h4>
    </div>
</div>
<!-- END Page Title -->





<div id="main-content">

        <div class="row">
            <div class="col-md-4" >
                <div class="box-content" style="background: rgb(233,240,249);">
                    <ul class="gallery">
                        <li>
                            <a href="<?php echo site_url('/main/goMain')?>" rel="prettyPhoto" title="学车入口">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt="" />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">学车入口</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="box-content" style="background: rgb(233,240,249);">
                    <ul class="gallery">
                        <li>
                            <a href="http://61.145.229.204:8181/weblogin.aspx" rel="prettyPhoto" title="驾校入口">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt="" />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">驾校入口</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="box-content" style="background: rgb(233,240,249);">
                    <ul class="gallery">
                        <li>
                            <a href="http://www.zhits.com.cn/view/main.html?menu=13" rel="prettyPhoto" title="行业管理">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt=""  />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">行业管理</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-list"></i> 最新考试通过率排名</h3>
                        <div class="box-tool">

                        </div>
                    </div>
                    <div class="box-content">
                        <ul class="iconic nice-scroll pass_rate" style="height: 300px">
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-list"></i> 驾校打分排名</h3>
                        <div class="box-tool">

                        </div>
                    </div>
                    <div class="box-content">
                        <ul class="iconic nice-scroll score" style="height: 300px">
                        </ul>
                    </div>
                </div>
            </div>



        </div>

    <footer>
        <p>2015 © 蓝光驾校.</p>
    </footer>

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>

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
            url: '<?php echo site_url('manage_ranking/showRankingByPassRate')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".pass_rate").empty();
                if(data.code==0){
                    for (var i = 0; i < data.data.length; i++){
                        var str='<li><div><dl><dt><h4><strong><i class="icon-star blue"></i> <a>'+data.data[i]['school_name']+'</a></strong></h4></dt> <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;考试通过率 : '+data.data[i]['pass_rate']+'% <a target="_blank" href="'+data.data[i]['school_url']+'" class="btn btn-primary" style="float: right;margin-right: 10px;">进入驾校官网 <i class="icon-chevron-right"></i></a></dd><hr/></dl></div></li>';
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
                    for (var i = 0; i < data.data.length; i++){
                        var str='<li><div><dl><dt><h4><strong><i class="icon-star blue"></i> <a>'+data.data[i]['school_name']+'</a></strong></h4></dt> <dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;驾校分数 : '+data.data[i]['score']+'分 <a target="_blank" href="'+data.data[i]['school_url']+'" class="btn btn-primary" style="float: right;margin-right: 10px;">进入驾校官网 <i class="icon-chevron-right"></i></a></dd><hr/></dl></div></li>';
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
