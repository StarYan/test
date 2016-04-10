
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0;margin-bottom: 3%;">
            <div class="box-title">
                <h3><i class="icon-edit"></i> 更新教练信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/coachAdmin')?>">返回</a>
                </div>
            </div>
        </div>

        <form action="<?php echo site_url('/school/coachUpdate').'/'.$result->id?>" class="form-horizontal" method="post" style="padding: 10px;">
            <div class="form-group">
                <label for="c_name" class="col-xs-3 col-lg-2 control-label">教练名</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="c_name" id="c_name" class="form-control" value="<?=$result->c_name?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="qualification_certificate" class="col-xs-3 col-lg-2 control-label">资格证号</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="qualification_certificate" id="qualification_certificate" value="<?=$result->qualification_certificate?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tel" class="col-xs-3 col-lg-2 control-label">联系电话</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="tel" id="tel" value="<?=$result->tel?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-xs-3 col-lg-2 control-label">价格</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="price" id="price" value="<?=$result->price?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="star" class="col-xs-3 col-lg-2 control-label">星级</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <select name="star" id="star"  class="form-control">
                        <option value="">-- 选择星级 --</option>
                        <option value="0" <?php if($result->star==0){echo 'selected';}?>>0星</option>
                        <option value="1" <?php if($result->star==1){echo 'selected';}?>>1星</option>
                        <option value="2" <?php if($result->star==2){echo 'selected';}?>>2星</option>
                        <option value="3" <?php if($result->star==3){echo 'selected';}?>>3星</option>
                        <option value="4" <?php if($result->star==4){echo 'selected';}?>>4星</option>
                        <option value="5" <?php if($result->star==5){echo 'selected';}?>>5星</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="student_num" class="col-xs-3 col-lg-2 control-label">学员数量</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="student_num" id="student_num" value="<?=$result->student_num?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group last">
                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存修改</button>
                    <button type="reset" class="btn">重置</button>
                </div>
            </div>
    </div>
</div>

