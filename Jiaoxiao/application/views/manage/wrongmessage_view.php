<!--
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/29
 * Time: 23:09
-->

<div class="row" >
    <div class="col-md-6 col-md-offset-1">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i><?=$dataUser->name?>的错误信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('manage_controller/UnPassed/')?>"><i class="icon-chevron-left"></i> 返回列表</a>
                </div>
            </div>
            <div class="box-content" style="height: 505px;">
                <div class="row">
                    <div class="col-md-12 user-profile-info">
                        <p><h2><strong>审核人:</strong></h2> <h4><?=$checkedAdmin->username?></h4></p><br/><hr style="margin: 0">
                        <p><h2><strong>审核日期:</strong></h2> <h4><?=$dataChecked->create_date?></h4></p><br/><hr style="margin: 0">
                        <p><h2><strong>错误信息内容:</strong></h2> <h4><?=$dataChecked->remark?></h4></p><br/><hr style="margin: 0">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4" >
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-phone"></i><?=$dataUser->name?>的联系方式</h3>
            </div>
            <div class="box-content" style="height: 505px;">
                <div class="row">
                    <div class="col-md-12 user-profile-info">
                        <p><h2><strong>联系电话:</strong></h2> <h4><?=$dataUser->phone?></h4></p><br/><hr style="margin: 0">
                        <p><h2><strong>QQ:</strong></h2> <h4><?=$dataUser->qq?></h4></p><br/><hr style="margin: 0">
                        <p><h2><strong>Email:</strong></h2> <h4><?=$dataUser->email?></h4></p><br/><hr style="margin: 0">
                    </div>
                </div>
                <br/>
                <div class="form-group last">
                    <div class="col-sm-9 col-sm-offset-14 col-lg-10 col-lg-offset-9">
                        <a type="button" class="btn btn-danger" href="<?php echo site_url('manage_controller/Deleted/'.$dataChecked->user_id)?>"> 已通知</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
