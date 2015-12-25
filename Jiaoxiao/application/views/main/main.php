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
        <a class="navbar-brand" href="<?php echo site_url('/main/goInterface')?>">
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
                            <a href="<?php echo site_url('register/goRegister')?>" rel="prettyPhoto" title="在线报名">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt="" />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">在线报名</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="box-content" style="background: rgb(233,240,249);">
                    <ul class="gallery">
                        <li>
                            <a href="<?php echo site_url('appointment/appointmentmodel')?>" rel="prettyPhoto" title="网上预约">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt="" />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">网上预约</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4" >
                <div class="box-content" style="background: rgb(233,240,249);">
                    <ul class="gallery">
                        <li>
                            <a href="<?php echo site_url('/evaluate/goEvaluate')?>" rel="prettyPhoto" title="学员评价">
                                <div>
                                    <img src="<?php echo base_url()?>images/12.jpg" alt=""  />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <p><h1><strong style="color:white;">学员评价</strong></h1></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-list-alt"></i> 新闻通知栏</h3>
                        <div class="box-tool">

                        </div>
                    </div>
                    <div class="box-content">
                        <ul class="messages nice-scroll" style="height: 300px">

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
            url: '<?php echo site_url('manage_news/show')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $(".messages").empty();
                if(data.code==0){
                    for (var i = 0; i < data.data.length; i++){
                        var str='<li><img src="<?php echo base_url()?>/images/info.png" alt=""> <div><div><h5>'+data.data[i]['title']+'</h5> <span class="time"><i class="icon-time"></i>'+ data.data[i]['create_date']+'</span> </div> <p><a target="_blank" href="'+data.data[i]['link']+'">'+ data.data[i]['content']+'</a></p> </div> </li>';
                        $(".messages").append(str);
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
