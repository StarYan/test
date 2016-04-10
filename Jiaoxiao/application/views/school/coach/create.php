<!--添加新闻信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-plus"></i> 添加教练信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/coachAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal form-bordered" method="post" action="<?php echo site_url('/school/coachAdd')?>" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="c_name" class="col-xs-3 col-lg-2 control-label">名字</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                    <input name="c_name" id="c_name" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="qualification_certificate" class="col-xs-3 col-lg-2 control-label">资格证号</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                    <input name="qualification_certificate" id="qualification_certificate" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tel" class="col-xs-3 col-lg-2 control-label">电话号码</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                    <input name="tel" id="tel" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="price" class="col-xs-3 col-lg-2 control-label">价格</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                    <input name="price" id="price" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="student_num" class="col-sm-3 col-lg-2 control-label">学生数量</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <div class="input-group">
                                    <input name="student_num" id="student_num" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label" for="school_img">上传教练照片：</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px; border:0;">
                                    <img  id="imgShow" style="width: 428px; height: 270px; border:0;" />
                                </div>
                                <input type="file" id="img" class="form-control default" name="img"  style="border:0; margin:10px;" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary add"><i class="icon-plus"></i> 添加</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--添加新闻信息-->

<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script>
    $(document).ready(function () {
        new uploadPreview({ UpBtn: "img", DivShow: "imgDiv", ImgShow: "imgShow" });
    });
</script>