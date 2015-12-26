<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i> 新闻信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_news/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-9 user-profile-info">
                        <p><span>新闻标题:</span> <?=$result[0]['title']?></p>
                        <p><span>新闻链接:</span> <?=$result[0]['link']?></p>
                        <p><span>新闻概要:</span> <?=$result[0]['content']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>