<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 车辆信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/carAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>车牌号码:</span> <?=$result[0]->number?></p>
                        <p><span>品牌:</span> <?=$result[0]->brand?></p>
                        <p><span>型号:</span> <?=$result[0]->style?></p>
                        <p><span>类型:</span> <?php if($result[0]->type==0){echo '手动挡';}elseif($result[0]->type==1){echo '自动挡';} ;?></p>
                        <p><span>车龄:</span> <?=$result[0]->age?></p>
                        <p><span>车辆照片:</span></p>
                        <p><img src="<?php echo base_url()?>/uploads/<?=$result[0]->img?>"/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>