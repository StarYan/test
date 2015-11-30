<!--
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/29
 * Time: 23:09
-->

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i><?=$dataUser->name?>的错误信息</h3>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-12 user-profile-info">
                        <p><span>审核人:</span> <?=$checkedAdmin->username?></p>
                        <p><span>审核日期:</span> <?=$dataChecked->create_date?></p>
                        <p><span>错误信息内容:</span> <?=$dataChecked->remark?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
