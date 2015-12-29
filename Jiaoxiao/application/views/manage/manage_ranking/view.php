<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 驾校排名信息管理</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_ranking/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>驾校名字:</span> <?=$result[0]['school_name']?></p>
                        <p><span>驾校地址:</span> <?=$result[0]['school_address']?></p>
                        <p><span>驾校电话:</span> <?=$result[0]['school_tel']?></p>
                        <p><span>驾校网址:</span><a target="_blank" href="<?=$result[0]['school_url']?>"><?=$result[0]['school_url']?></a> </p>
                        <p><span>驾校通过率:</span> <?=$result[0]['pass_rate']?></p>
                        <p><span>驾校分数:</span> <?=$result[0]['score']?></p>
                        <p><span>创建管理员ID:</span> <?=$result[0]['create_id']?></p>
                        <p><span>创建日期:</span> <?=$result[0]['create_date']?></p>
                        <p><span>更新管理员ID:</span> <?=$result[0]['update_id']?></p>
                        <p><span>更新日期:</span> <?=$result[0]['update_date']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>