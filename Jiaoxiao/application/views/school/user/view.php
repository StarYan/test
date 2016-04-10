<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 学员信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/studentAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>名字:</span> <?=$result->name?></p>
                        <p><span>身份证号:</span> <?=$result->idcard?></p>
                        <p><span>性别:</span> <?php if($result->sex==0){echo '女';}else{echo '男';};?></p>
                        <p><span>电话:</span> <?=$result->phone?></p>
                        <p><span>培训车型:</span> <?=$result->wanted_car_type?></p>
                        <p><span>学习进度:</span> <?php if($result->schedule==0){echo '';}elseif($result->schedule==1){echo '科目一';}elseif($result->schedule==2){echo '科目二';}elseif($result->schedule==3){echo '科目三';}elseif($result->schedule==4){echo '科目四';};?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>