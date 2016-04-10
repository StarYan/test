
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0;margin-bottom: 3%;">
            <div class="box-title">
                <h3><i class="icon-edit"></i> 更新学员信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/studentAdmin')?>">返回</a>
                </div>
            </div>
        </div>

        <form action="<?php echo site_url('/school/studentUpdate').'/'.$result->id?>" class="form-horizontal" method="post" style="padding: 10px;">
            <div class="form-group">
                <label for="name" class="col-xs-3 col-lg-2 control-label">名字</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="name" id="name" class="form-control" value="<?=$result->name?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="idcard" class="col-xs-3 col-lg-2 control-label">身份证号</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="idcard" id="idcard" value="<?=$result->idcard?>" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="sex" class="col-xs-3 col-lg-2 control-label">性别</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <select name="sex" id="sex"  class="form-control" >
                        <option value="0" <?php if($result->sex==0){echo 'selected';}?>>女</option>
                        <option value="1" <?php if($result->sex==1){echo 'selected';}?>>男</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-xs-3 col-lg-2 control-label">电话</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="phone" id="phone" value="<?=$result->phone?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="wanted_car_type" class="col-xs-3 col-lg-2 control-label">培训车型</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <input type="text" name="wanted_car_type" id="wanted_car_type" value="<?=$result->wanted_car_type?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="schedule" class="col-xs-3 col-lg-2 control-label">学习进度</label>
                <div class="col-sm-9 col-lg-10 controls">
                    <select name="schedule" id="schedule"  class="form-control">
                        <option value="">-- 选择进度 --</option>
                        <option value="0" <?php if($result->schedule==0){echo 'selected';}?>>空</option>
                        <option value="1" <?php if($result->schedule==1){echo 'selected';}?>>科目一</option>
                        <option value="2" <?php if($result->schedule==2){echo 'selected';}?>>科目二</option>
                        <option value="3" <?php if($result->schedule==3){echo 'selected';}?>>科目三</option>
                        <option value="4" <?php if($result->schedule==4){echo 'selected';}?>>科目四</option>
                    </select>
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

