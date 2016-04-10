<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 车辆信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/placeAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>场地名字:</span> <?=$result[0]->p_name?></p>
                        <p><span>场地地址:</span> <?=$result[0]->address?></p>
                        <p><span>场地描述:</span> <?=$result[0]->description?></p>
                        <p><span>场地照片:</span></p>
                        <p><img src="<?php echo base_url()?>/uploads/<?=$result[0]->img?>"/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>