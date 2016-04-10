
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-table"></i> 编辑驾校介绍信息</h3>

            </div>
            <div class="box-content">
                <div class="manage-content" >
                    <form id="form-login" class="login-form" action="<?php echo site_url('/school/introductionAdmin')?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="control-label" for="school_introduction"><h4>驾校简介：</h4></label>
                            <div class="controls">
                                <textarea rows="5" name="school_introduction" class="form-control" required><?php if(!empty($result['school_introduction'])){echo $result['school_introduction'];}?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="school_address"><h4>驾校地址：</h4></label>
                            <div class="controls">
                                <textarea rows="5" name="school_address" class="form-control" required><?php if(!empty($result['school_address'])){echo $result['school_address'];}?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="school_tel"><h4>驾校电话：</h4></label>
                            <div class="controls">
                                <input name="school_tel" class="form-control" value="<?php if(!empty($result['school_tel'])){echo $result['school_tel'];}?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="school_img"><h4>上传驾校照片：</h4></label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="hidden-xs fileupload-new img-thumbnail"  id="imgDiv" style="width: 428px; height: 270px; border:0;">
                                        <img src="<?php if(!empty($result['school_img'])){echo base_url().'/uploads/'.$result['school_img'];}?>" id="imgShow" style="width: 428px; height: 270px; border:0;" />
                                    </div>
                                    <input type="file" id="school_img" class="form-control default" name="school_img"  style="border:0; margin:10px;" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary form-control submit">提 交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script>
    $(document).ready(function () {
        new uploadPreview({ UpBtn: "school_img", DivShow: "imgDiv", ImgShow: "imgShow" });
    });
</script>
