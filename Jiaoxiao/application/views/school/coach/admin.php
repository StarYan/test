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
                <form class="form-horizontal" method="post" action="http://localhost/TEST/Jiaoxiao/index.php/school/coachSearch">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="c_name" class="col-sm-4 col-lg-3 control-label">名字</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="c_name" id="c_name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qualification_certificate" class="col-sm-4 col-lg-3 control-label">资格证号</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="qualification_certificate" id="qualification_certificate" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tel" class="col-sm-4 col-lg-3 control-label">电话号码</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="tel" id="tel" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price" class="col-sm-4 col-lg-3 control-label">价格</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="price" id="price" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_num" class="col-sm-4 col-lg-3 control-label">学生数量</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="student_num" id="student_num" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="star" class="col-sm-4 col-lg-3 control-label">星级</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <select name="star" id="star" class="form-control">
                                        <option value="">-- 选择星级 --</option>
                                        <option value="0">0星</option>
                                        <option value="1">1星</option>
                                        <option value="2">2星</option>
                                        <option value="3">3星</option>
                                        <option value="4">4星</option>
                                        <option value="5">5星</option>
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


<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-list"></i> 教练信息管理</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/school/coachAdd')?>"> 添加教练信息</a>
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">资格证号</th>
                            <th class="text-center">名字</th>
                            <th class="text-center">电话</th>
                            <th class="text-center">价格</th>
                            <th class="text-center">学生数量</th>
                            <th class="text-center">星级</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $coachInfo):?>
                                <tr>
                                    <td class="text-center"><span class="label label-info"><?php echo $coachInfo->qualification_certificate;?></span></td>
                                    <td class="text-center"><?php echo $coachInfo->c_name;?></td>
                                    <td class="text-center"><?php echo $coachInfo->tel;?></td>
                                    <td class="text-center"><?php echo $coachInfo->price;?>/小时</td>
                                    <td class="text-center"><?php echo $coachInfo->student_num;?></td>
                                    <td class="text-center"><?php echo $coachInfo->star;?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/school/coachView').'/'.$coachInfo->id; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/school/coachUpdate').'/'.$coachInfo->id; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/school/coachDelete').'/'.$coachInfo->id; ?>"><i class="icon-trash"></i></a>
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