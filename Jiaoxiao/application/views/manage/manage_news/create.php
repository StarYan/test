<!--添加新闻信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> 添加新闻信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_news/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form action="<?php echo site_url('/manage_news/create')?>" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label for="title" class="col-xs-3 col-lg-2 control-label">新闻标题</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="title" id="title" placeholder="输入新闻标题" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-xs-3 col-lg-2 control-label">新闻链接</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="link" id="link" placeholder="输入新闻的链接" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-xs-3 col-lg-2 control-label">新闻概要</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea name="content" id="content" placeholder="输入新闻概要(不得超过80字)" rows="5" class="form-control" maxlength="80" required></textarea>
                        </div>
                    </div>

                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存</button>
                            <button type="reset" class="btn">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--添加新闻信息-->

