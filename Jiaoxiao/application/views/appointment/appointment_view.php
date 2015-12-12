<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>��УԤԼ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/component.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/flaty-responsive.css">


</head>
<body>

<!-- ��¼�� -->
<div class="md-modal md-effect-7" id="login">
    <div class="md-content">
        <h3>�û���¼</h3>
        <div>
            <form action="#" class="form-horizontal"  method="post">
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label" for="username">�û���:</label>
                    <div class="col-sm-6 col-lg-10 controls">
                        <input type="text" name="username" id="username" class="form-control" data-rule-required="true" data-rule-minlength="3" placeholder="�������û���" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label" for="password">�û�����:</label>
                    <div class="col-sm-6 col-lg-10 controls">
                        <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="�������û�����" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                        <input type="submit" class="btn btn-primary" value="��¼">
                        <input type="reset" class="btn" value="����">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ��¼�� -->
<div class="md-overlay"></div>

<div class="a" >
    <!-- BEGIN Navbar -->
    <div id="navbar" class="navbar">
        <a class="navbar-brand" href="#">
            <small>
                <i class="icon-desktop"></i>
                ��УԤԼ
            </small>
        </a>



        <!-- ѧԱ��¼��ť -->
        <ul class="nav flaty-nav pull-right">
            <li>
                <a href="#" class="md-trigger" data-modal="login" >
                    ��¼
                </a>
            </li>
        </ul>
        <!-- ѧԱ��¼��ť -->

        <button type="button" class="navbar-toggle  navbar-btn btn " data-toggle="collapse" data-target="#select">
            <i class="icon-reorder"></i>
            ���ԤԼ
        </button>
    </div>
    <!-- END Navbar -->

    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1>�����У��ӭ��</h1>
            <h4>��У����</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- ԤԼ�� -->
    <div id="breadcrumbs" class="container">
        <form action="" class="form-horizontal" id="validation-form" method="post">
            <div class="collapse navbar-collapse row " id="select">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="place" class="col-sm-6 col-lg-4 control-label">����</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="place" id="place"  data-rule-required="true">
                                <option value=""> ѡ�񳡵� </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="time" class="col-sm-6 col-lg-4 control-label">ʱ��</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="time" id="time" data-rule-required="true">
                                <option value=""> ѡ��ʱ�� </option>
                                <option value="1"> 07:00 - 09:00 </option>
                                <option value="2"> 10:00 - 12:00 </option>
                                <option value="3"> 14:00 - 16:00 </option>
                                <option value="4"> 15:00 - 17:00 </option>
                                <option value="5"> 19:00 - 21:00 </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="coach" class="col-sm-6 col-lg-4 control-label">����</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="coach" id="coach" data-rule-required="true">
                                <option value=""> ѡ����� </option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="car" class="col-sm-6 col-lg-4 control-label">����</label>
                        <div class="col-sm-12 col-lg-8 controls">
                            <select class="form-control" name="car" id="car" data-rule-required="true">
                                <option value=""> ѡ���� </option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <input type="submit" class="btn btn-primary" value="ԤԼ" id="submit">
                            <button type="button" class="btn btn-danger">ȡ��</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <!-- ԤԼ�� -->
</div>


<!-- ԤԼ���ݽ��� -->
<div class="container" id="main-container" >
    <div id="main-content" style="margin-top: 100px;">
        <!-- �����Ƽ� -->
        <div class="row" style="margin-top: 100px; z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>�����Ƽ�</h3>
                    </div>


                </div>
            </div>
        </div>
        <!-- �����Ƽ� -->
        <br/><br/><br/>

        <!-- ���ؽ��� -->
        <div class="row" style="margin-top: 100px; z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>���ؽ���</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>����ͼƬ</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/1_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>��������</h4>
                                <dl>
                                    <dt>���ص�ַ</dt>
                                    <dd>�㶫ʡ�麣��</dd>
                                    <dt>��������</dt>
                                    <dd>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</dd>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ���ؽ��� -->
        <br /><br /><br />

        <!-- �������� -->
        <div class="row" style="z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>��������</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>����ͼƬ</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/2_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>��������</h4>
                                <dl class="dl-horizontal">
                                    <dt>����</dt>
                                    <dd>XXX</dd>
                                    <dt>�绰</dt>
                                    <dd>13631224950</dd>
                                    <dt>��Ǯ</dt>
                                    <dd><i class="icon-jpy"></i>200/Сʱ</dd>
                                    <dt>�Ǽ�</dt>
                                    <dd><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-empty"></i></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- �������� -->
        <br /><br /><br />

        <!-- ���ͽ��� -->
        <div class="row" style="z-index: -1;">
            <div class="col-md-12">
                <div class="box box-blue">
                    <div class="box-title">
                        <h3><i class="icon-th-list"></i>���ͽ���</h3>
                    </div>
                    <div class="box-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>����ͼƬ</h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#" rel="prettyPhoto" title="Description of image">
                                            <div>
                                                <img src="img/demo/gallery/3_thumb.jpg" alt="" />
                                                <i></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>��������</h4>
                                <dl class="dl-horizontal">
                                    <dt>���ƺ���</dt>
                                    <dd>��C88888</dd>
                                    <dt>�����ͺ�</dt>
                                    <dd>C1</dd>
                                    <dt></dt>
                                    <dd></dd>
                                    <dt></dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ���ͽ��� -->

        <footer>
            <p>2015 ? �����У.</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="icon-chevron-up"></i></a>
    </div>
</div>
<!-- ԤԼ���ݽ��� -->


<!--basic scripts-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script>window.jQuery || document.write('<script src="<?php echo base_url()?>/assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
<script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>/assets/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url()?>/assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url()?>/assets/sparkline/jquery.sparkline.min.js"></script>



<!--flaty scripts-->
<script src="<?php echo base_url()?>/js/flaty.js"></script>
<script src="<?php echo base_url()?>/js/classie.js"></script>
<script src="<?php echo base_url()?>/js/modalEffects.js"></script>

<script>
    $(document).ready(function(){
        //���س�����Ϣ
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getplace')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#place").empty();
                var s="<option value=''> ѡ�񳡵� </option>";
                $("#place").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#place").append(str);
                }
            }
        });

        //���ؽ�����Ϣ
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getcoach')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#coach").empty();
                var s="<option value=''> ѡ����� </option>";
                $("#coach").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#coach").append(str);
                }
            }
        });

        //���س�����Ϣ
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getcar')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                $("#car").empty();
                var s="<option value=''> ѡ���� </option>";
                $("#car").append(s);
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#car").append(str);
                }
            }
        });

        //�ύԤԼ��Ϣ����̨����ԤԼ
        $("#submit").onclick(function(){
            var placeid=$("#place").val();
            var coachid=$("#coach").val();
            var timeid=$("#time").val();
            var carid=$("#car").val();
            var userid=<?=$dataUser->id?>;
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('manage_appointment/saveappointment')?>',
                data: {
                    placeid: placeid,
                    coachid: coachid,
                    timeid: timeid,
                    carid:carid,
                    userid:userid
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                }
            });
        });

    });
</script>

</body>
</html>
