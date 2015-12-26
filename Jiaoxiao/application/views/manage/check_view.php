<!--
 * Created by PhpStorm.
 * User: Administrator_Wen
 * Date: 2015/11/29
 * Time: 18:29
 -->



<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-file"></i>用户信息</h3>
                <div class="box-tool">
                    <div class="box-tool">
                        <a class="btn btn-primary" href="<?php echo site_url('manage_controller/UnChecked/'.$dataAdmin->id)?>"><i class="icon-chevron-left"></i> 返回列表</a>
                    </div>
                </div>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo base_url().'/uploads/'.$dataUser->photo?>" alt="用户照片" />
                        <br/><br/>
                    </div>
                    <div class="col-md-9 user-profile-info">
                        <p><span>用户名:</span> <?=$dataUser->name?></p>
                        <?php if($dataUser->sex=1){ ?>
                            <p><span>性别:</span> 男</p>
                        <?php }elseif($dataUser->sex=0){ ?>
                            <p><span>性别:</span> 女</p>
                        <?php } ?>
                        <p><span>身份证号码:</span> <?=$dataUser->idcard?></p>
                        <p><span>出生日期:</span> <?=$dataUser->birthday?></p>
                        <p><span>电话号码:</span> <?=$dataUser->phone?></p>
                        <p><span>住址:</span> <?=$dataUser->address?></p>
                        <p><span>QQ:</span> <?=$dataUser->qq?></p>
                        <p><span>培训车型:</span> <?=$dataUser->wanted_car_type?></p>
                        <p><span>Email:</span> <?=$dataUser->email?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-reorder"></i>审核 (审核人：<?=$dataAdmin->username?>)</h3>

                <div class="box-tool">
                    <a  href="#" class="btn btn-danger" id="unpassed">审核不通过</a>
                </div>

                <div class="box-tool">
                    <a  href="<?php echo site_url().'/manage_controller/Checked/'.'/'.$dataUser->id?>" class="btn btn-primary">审核通过</a>
                </div>
            </div>
            <div class="box-content ">
                <form action="<?php echo site_url().'/manage_controller/Checked/'.'/'.$dataUser->id?>" class="form-horizontal form-row-separated" method="post">
                    <div class="form-group">
                        <label for="WrongMessage" class="col-xs-3 col-lg-2 control-label">审核结果</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <textarea name="remark" id="WrongMessage" rows="5" class="form-control wrong" required disabled placeholder="请输入审核不通过的原因..."></textarea>
                        </div>
                    </div>

                    <div class="form-group last">
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-danger wrong" disabled> 提交</button>
                            <button type="reset" class="btn btn-default wrong" disabled> 重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#unpassed").click(function(){
            $(".wrong").removeAttr('disabled');
        });
    });
</script>