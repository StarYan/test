<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 教练信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/coachAdmin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>名字:</span> <?=$result[0]->c_name?></p>
                        <p><span>资格证号:</span> <?=$result[0]->qualification_certificate?></p>
                        <p><span>电话号码:</span> <?=$result[0]->tel?></p>
                        <p><span>价格:</span> <?=$result[0]->price?></p>
                        <p><span>学生数量:</span> <?=$result[0]->student_num?></p>
                        <p><span>教练照片:</span></p>
                        <p><img src="<?php echo base_url()?>/uploads/<?=$result[0]->img?>"/></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>