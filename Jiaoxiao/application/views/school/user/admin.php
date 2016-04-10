
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
                <form class="form-horizontal" method="post" action="<?php echo site_url('/school/studentSearch')?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 col-lg-3 control-label">名字</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="name" id="name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="idcard" class="col-sm-4 col-lg-3 control-label">身份证号码</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="idcard" id="idcard" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="wanted_car_type" class="col-sm-4 col-lg-3 control-label">培训车型</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input name="wanted_car_type" id="wanted_car_type" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sex" class="col-sm-4 col-lg-3 control-label">性别</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <select name="sex" id="sex"  class="form-control">
                                        <option value="">-- 选择性别 --</option>
                                        <option value="0">女</option>
                                        <option value="1">男</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="schedule" class="col-sm-4 col-lg-3 control-label">学习进度</label>
                            <div class="col-sm-7 col-lg-8 controls">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <select name="schedule" id="schedule"  class="form-control">
                                        <option value="">-- 选择进度 --</option>
                                        <option value="0">空</option>
                                        <option value="1">科目一</option>
                                        <option value="2">科目二</option>
                                        <option value="3">科目三</option>
                                        <option value="4">科目四</option>
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
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-list"></i> 学员信息管理</h3>
            </div>
            <div class="box-content" style="border:1px solid #ddd; padding: 0; ">
                <div class="table-responsive">
                    <table class="table table-hover fill-head table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">名字</th>
                            <th class="text-center">身份证号</th>
                            <th class="text-center">性别</th>
                            <th class="text-center">电话</th>
                            <th class="text-center">培训车型</th>
                            <th class="text-center">学习进度</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $studentInfo):?>
                                <tr>
                                    <td class="text-center"><?php echo $studentInfo->name;?></td>
                                    <td class="text-center"><?php echo $studentInfo->idcard;?></td>
                                    <td class="text-center"><?php if($studentInfo->sex==0){echo '女';}else{echo '男';};?></td>
                                    <td class="text-center"><?php echo $studentInfo->phone;?></td>
                                    <td class="text-center"><?php echo $studentInfo->wanted_car_type;?></td>
                                    <td class="text-center"><?php if($studentInfo->schedule==0){echo '';}elseif($studentInfo->schedule==1){echo '科目一';}elseif($studentInfo->schedule==2){echo '科目二';}elseif($studentInfo->schedule==3){echo '科目三';}elseif($studentInfo->schedule==4){echo '科目四';};?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/school/studentView').'/'.$studentInfo->id; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/school/studentUpdate').'/'.$studentInfo->id; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/school/studentDelete').'/'.$studentInfo->id; ?>"><i class="icon-trash"></i></a>
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
