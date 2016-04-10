<!--添加新闻信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> 修改新闻信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_news/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form action="<?php echo site_url('/manage_news/update').'/'.$result[0]['id']?>" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label for="title" class="col-xs-3 col-lg-2 control-label">新闻标题</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="title" id="title" class="form-control" value="<?=$result[0]['title']?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-xs-3 col-lg-2 control-label">新闻链接</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="link" id="link" value="<?=$result[0]['link']?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-xs-3 col-lg-2 control-label">新闻概要</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea name="content" id="content"  rows="5" class="form-control" maxlength="80" required><?=$result[0]['content']?></textarea>
                        </div>
                    </div>

                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存修改</button>
                            <button type="reset" class="btn">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--添加新闻信息-->

