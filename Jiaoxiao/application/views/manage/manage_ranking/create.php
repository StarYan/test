<!--添加驾校管理信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> 添加驾校管理信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_ranking/admin') ?>"> 返回列表</a>
                </div>
            </div>
            <div class="box-content">
                <form action="<?php echo site_url('/manage_ranking/create')?>" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label for="school_name" class="col-xs-3 col-lg-2 control-label">驾校名字</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="school_name" id="school_name" placeholder="输入驾校名字" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="school_address" class="col-xs-3 col-lg-2 control-label">驾校地址</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="school_address" id="school_address" placeholder="输入驾校地址" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="school_tel" class="col-xs-3 col-lg-2 control-label">驾校电话</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="school_tel" id="school_tel" placeholder="输入驾校电话" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="school_url" class="col-xs-3 col-lg-2 control-label">驾校网址</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="school_url" id="school_url" placeholder="输入驾校网址" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass_rate" class="col-xs-3 col-lg-2 control-label">驾校通过率</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="pass_rate" id="pass_rate" placeholder="输入驾校通过率" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="score" class="col-xs-3 col-lg-2 control-label">驾校分数</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" name="score" id="score" placeholder="输入驾校分数" class="form-control" required>
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
<!--添加驾校管理信息-->

