<!--添加新闻信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> 添加车辆信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/carAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form action="<?php echo site_url('/school/carAdd')?>" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="number" class="col-xs-3 col-lg-2 control-label">车牌号码</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="number" id="number" placeholder="车牌号码" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="brand" class="col-xs-3 col-lg-2 control-label">品牌</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="brand" id="brand" placeholder="品牌" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="age" class="col-xs-3 col-lg-2 control-label">车龄</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="age" id="age" placeholder="车龄" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-xs-3 col-lg-2 control-label">类型</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="type" id="type" placeholder="类型" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="style" class="col-xs-3 col-lg-2 control-label">型号</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="style" id="style" placeholder="型号" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 col-lg-2 control-label" for="school_img">上传车辆照片：</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px; border:0;">
                                    <img  id="imgShow" style="width: 428px; height: 270px; border:0;" />
                                </div>
                                <input type="file" id="img" class="form-control default" name="img"  style="border:0; margin:10px;" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存</button>
                            <button type="reset" class="btn">重置</button>
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