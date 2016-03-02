
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-search"></i> 搜索栏</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-down"></i></a>
                </div>
            </div>
            <div class="box-content container" style="display: none;">
                <form class="form-horizontal" method="post" action="<?php echo site_url('/manage_schoolRegister/search')?>">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nickname" class="col-sm-4 col-lg-3 control-label">用户名</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="nickname" id="nickname" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="school_name" class="col-sm-4 col-lg-3 control-label">驾校名</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="school_name" id="school_name" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 col-lg-3 control-label">联系人</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="name" id="name" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tel" class="col-sm-4 col-lg-3 control-label">联系电话</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="tel" id="tel" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="licence" class="col-sm-4 col-lg-3 control-label">营业执照</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="licence" id="licence" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status" class="col-sm-4 col-lg-3 control-label">状态</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <select name="status" id="status"  class="form-control" style="width: 200px;">
                                        <option value="">-- 选择状态 --</option>
                                        <option value="0">未审核</option>
                                        <option value="1">合格</option>
                                        <option value="2">不合格</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="update_id" class="col-sm-4 col-lg-3 control-label">审核人ID</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="update_id" id="update_id" type="text" class="form-control" style="width: 200px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="col-sm-4 col-lg-3 controls">
                                <button type="submit" class="btn btn-primary"><i class="icon-search"></i> 搜索</button>
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
                <h3><i class="icon-list"></i> 驾校注册信息</h3>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">用户名</th>
                            <th class="text-center">驾校名</th>
                            <th class="text-center">联系人</th>
                            <th class="text-center">联系电话</th>
                            <th class="text-center">营业执照</th>
                            <th class="text-center">注册时间</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">审核人ID</th>
                            <th class="text-center">审核时间</th>
                            <th class="text-center">备注</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $registerInfo):?>
                                <tr class="table-flag-blue">
                                    <td class="text-center"><?php echo $registerInfo['id'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['nickname'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['school_name'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['name'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['tel'];?></td>
                                    <td class="text-center"><span class="label label-info"><?php echo $registerInfo['licence'];?></span></td>
                                    <td class="text-center"><?php echo $registerInfo['create_date'];?></td>
                                    <td class="text-center"><?php if($registerInfo['status']==0){echo '未审核';}elseif($registerInfo['status']==1){echo '合格';}else{echo '不合格';};?></td>
                                    <td class="text-center"><?php echo $registerInfo['update_id'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['update_date'];?></td>
                                    <td class="text-center"><?php echo $registerInfo['remark'];?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="审核" href="<?php echo site_url('/manage_schoolRegister/update').'/'.$registerInfo['id']; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/manage_schoolRegister/delete').'/'.$registerInfo['id']; ?>"><i class="icon-trash"></i></a>
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
