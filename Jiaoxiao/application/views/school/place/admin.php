
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0">
            <div class="box-title">
                <h3><i class="icon-search"></i> 搜索栏</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content container" style="display: none;border: 1px solid rgba(88,177,252,.5)">
                <form class="form-horizontal" method="post" action="<?php echo site_url('/school/placeSearch')?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="p_name" class="col-sm-4 col-lg-3 control-label">场地名字</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="p_name" id="p_name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" class="col-sm-4 col-lg-3 control-label">场地地址</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="address" id="address" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-sm-4 col-lg-3 controls">
                                <button type="submit" class="btn btn-primary search"><i class="icon-search"></i> 搜索</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--注册信息汇总-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-list"></i> 场地信息管理</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/placeAdd') ?>"> 添加场地信息</a>
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">场地名字</th>
                            <th class="text-center">场地地址</th>
                            <th class="text-center">场地描述</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if($result):?>
                            <?php foreach($result as $placeInfo):?>
                                <tr>
                                    <td class="text-center"><span class="label label-info"><?php echo $placeInfo->p_name;?></span></td>
                                    <td class="text-center"><?php echo $placeInfo->address;?></td>
                                    <td class="text-center"><?php echo $placeInfo->description;?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/school/placeView').'/'.$placeInfo->id; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/school/placeUpdate').'/'.$placeInfo->id; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/school/placeDelete').'/'.$placeInfo->id; ?>"><i class="icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>

                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <?php echo $link;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--注册信息汇总-->
