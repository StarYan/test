<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Administrator_Wen-->
<!-- * Date: 2015/12/4-->
<!-- * Time: 17:14-->
<!-- */-->

<div class="col-md-12">
    <div class="box">
        <div class="box-title">
            <h3><i class="icon-list-alt"></i>添加信息</h3>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1-1" data-toggle="tab">添加场地信息</a></li>
                <li><a href="#tab-1-2" data-toggle="tab">添加教练信息</a></li>
                <li><a href="#tab-1-3" data-toggle="tab">添加车辆信息</a></li>
            </ul>
        </div>

        <div class="box-content">
            <!--添加场地信息-->
            <div class="tab-content">
                <div class="tab-pane active" id="tab-1-1">
                    <div class="box-content">
                        <form action="<?php echo site_url('/manage_addinfo/addplace')?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
                            <input type="hidden" name="adminid" id="adminid" value="<?php echo $dataAdmin->id;?>">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="id">场地:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="name" id="name" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="address">场地地址:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="address" id="address" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">场地详情:</label>
                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="address_detail" placeholder="填写场地的详细信息..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="address_img">场地图片:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <input type="file" name="img" id="img" class="form-control" data-rule-required="true" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存</button>
                                    <button type="reset" class="btn btn-danger">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--添加场地信息-->

                <!--添加教练信息-->
                <div class="tab-pane" id="tab-1-2">
                    <div class="box-content">
                        <form action="<?php echo site_url('/manage_addinfo/addcoach')?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
                            <input type="hidden" name="coachid" id="coachid" class="form-control" data-rule-required="true"  />


                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="name">教练名字:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="coachname" id="coachname" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="phone">教练电话:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="phone" id="phone" class="form-control" data-rule-required="true" data-rule-maxlength="11"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="money">教练价格:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="money" id="money" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">教练简介</label>
                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="coach_detail" placeholder="填写教练简介..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="coach_img">教练图片:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="file" name="coach_img" id="coach_img" class="form-control" data-rule-required="true"   />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存</button>
                                    <button type="reset" class="btn btn-danger">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--添加教练信息-->

                <!--添加车辆信息-->
                <div class="tab-pane" id="tab-1-3">
                    <div class="box-content">
                        <form action="<?php echo site_url('/manage_addinfo/addcartype')?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="type">车辆车型:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="type" id="type" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="number">车牌号码:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="text" name="number" id="number" class="form-control" data-rule-required="true" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">车辆简介</label>
                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="car_detail" placeholder="填写车辆简介..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label" for="car_img">车辆图片:</label>
                                <div class="col-sm-6 col-lg-4 controls">
                                    <input type="file" name="car_img" id="car_img" class="form-control" data-rule-required="true"  />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 保存</button>
                                    <button type="reset" class="btn btn-danger">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--添加车辆信息-->
            </div>
        </div>
    </div>
</div>