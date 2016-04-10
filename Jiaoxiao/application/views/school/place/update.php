
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0;margin-bottom: 3%;">
            <div class="box-title">
                <h3><i class="icon-edit"></i> 更新场地信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/placeAdmin')?>">返回</a>
                </div>
            </div>
        </div>

        <form action="<?php echo site_url('/school/placeUpdate').'/'.$result->id?>" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="p_name" class="col-xs-3 col-lg-2 control-label">场地名字</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="p_name" id="p_name" class="form-control" value="<?=$result->p_name?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-xs-3 col-lg-2 control-label">场地地址</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="address" id="address" value="<?=$result->address?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-xs-3 col-lg-2 control-label">场地描述</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="description" id="description" value="<?=$result->description?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 col-lg-2 control-label" for="school_img">上传场地照片：</label>
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
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存修改</button>
                    <button type="reset" class="btn">重置</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script>
    $(document).ready(function () {
        new uploadPreview({ UpBtn: "img", DivShow: "imgDiv", ImgShow: "imgShow" });
    });
</script>