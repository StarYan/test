<!--更新注册信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> 审核驾校注册信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_schoolRegister/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form action="<?php echo site_url('/manage_schoolRegister/update').'/'.$result[0]['id']?>" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nickname" class="col-xs-3 col-lg-2 control-label">用户名</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="nickname" id="nickname" class="form-control" value="<?=$result[0]['nickname']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="school_name" class="col-xs-3 col-lg-2 control-label">驾校名</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="school_name" id="school_name" value="<?=$result[0]['school_name']?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-xs-3 col-lg-2 control-label">联系人</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input name="name" id="name" class="form-control" value="<?=$result[0]['name']?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tel" class="col-xs-3 col-lg-2 control-label">联系电话</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input name="tel" id="tel" class="form-control" value="<?=$result[0]['tel']?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="licence" class="col-xs-3 col-lg-2 control-label">营业执照</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input name="licence" id="licence" class="form-control" value="<?=$result[0]['licence']?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">照片</label>
                        <div class=" col-sm-9 col-lg-10 controls">
                            <img src="<?php echo base_url().'/uploads/'.$result[0]['img'] ?>" id="imgShow" style="width: 428px; height: 270px; border:0;" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-xs-3 col-lg-2 control-label">状态</label>
                        <div class="col-sm-2 col-lg-2 controls">
                            <select class="form-control input-sm" id="status" name="status">
                                <option value="0" <?php if($result[0]['status']==0){echo 'selected';}?>>未审核</option>
                                <option value="1" <?php if($result[0]['status']==1){echo 'selected';}?>>合格</option>
                                <option value="2" <?php if($result[0]['status']==2){echo 'selected';}?>>不合格</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remark" class="col-xs-3 col-lg-2 control-label">备注</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea name="remark" id="remark" class="form-control" maxlength="80" rows="5" ><?=$result[0]['remark']?></textarea>
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
    </div>
</div>
<!--更新注册信息-->

<script src="<?php echo base_url()?>/js/uploadPreview.js"></script>
<script>
    new uploadPreview({ UpBtn: "img", DivShow: "imgDiv", ImgShow: "imgShow" });
</script>