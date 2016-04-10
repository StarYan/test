
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
                <form class="form-horizontal" method="post" action="<?php echo site_url('/school/carSearch')?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="number" class="col-sm-4 col-lg-3 control-label">车牌号码</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="number" id="number" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="brand" class="col-sm-4 col-lg-3 control-label">品牌</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="brand" id="brand" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="style" class="col-sm-4 col-lg-3 control-label">型号</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="style" id="style" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="age" class="col-sm-4 col-lg-3 control-label">车龄</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="age" id="age" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type" class="col-sm-4 col-lg-3 control-label">类型</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <select name="type" id="type"  class="form-control">
                                        <option value="">-- 选择类型 --</option>
                                        <option value="0">手动挡</option>
                                        <option value="1">自动挡</option>
                                    </select>
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
                <h3><i class="icon-list"></i> 车辆信息管理</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/carAdd') ?>"> 添加车辆信息</a>
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">车牌号码</th>
                            <th class="text-center">品牌</th>
                            <th class="text-center">型号</th>
                            <th class="text-center">车龄</th>
                            <th class="text-center">类型</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if($result):?>
                            <?php foreach($result as $carInfo):?>
                                <tr>
                                    <td class="text-center"><span class="label label-info"><?php echo $carInfo->number;?></span></td>
                                    <td class="text-center"><?php echo $carInfo->brand;?></td>
                                    <td class="text-center"><?php echo $carInfo->style;?></td>
                                    <td class="text-center"><?php echo $carInfo->age;?>年</td>
                                    <td class="text-center"><?php if($carInfo->type==0){echo '手动挡';}elseif($carInfo->type==1){echo '自动挡';} ;?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/school/carView').'/'.$carInfo->id; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/school/carUpdate').'/'.$carInfo->id; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/school/carDelete').'/'.$carInfo->id; ?>"><i class="icon-trash"></i></a>
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
