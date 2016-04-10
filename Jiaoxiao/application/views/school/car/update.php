
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0;margin-bottom: 3%;">
            <div class="box-title">
                <h3><i class="icon-edit"></i> 更新车辆信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/carAdmin')?>">返回</a>
                </div>
            </div>
        </div>

        <form action="<?php echo site_url('/school/carUpdate').'/'.$result->id?>" class="form-horizontal" method="post" style="padding: 10px;">
            <div class="form-group">
                <label for="number" class="col-xs-3 col-lg-2 control-label">车牌号码</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="number" id="number" class="form-control" value="<?=$result->number?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="brand" class="col-xs-3 col-lg-2 control-label">品牌</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="brand" id="brand" value="<?=$result->brand?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="style" class="col-xs-3 col-lg-2 control-label">型号</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="style" id="style" value="<?=$result->style?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="age" class="col-xs-3 col-lg-2 control-label">车龄</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="age" id="age" value="<?=$result->age?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="type" class="col-xs-3 col-lg-2 control-label">类型</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <select name="type" id="type"  class="form-control">
                        <option value="">-- 选择类型 --</option>
                        <option value="0" <?php if($result->type==0){echo 'selected';}?>>手动挡</option>
                        <option value="1" <?php if($result->type==1){echo 'selected';}?>>自动挡</option>
                    </select>
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

