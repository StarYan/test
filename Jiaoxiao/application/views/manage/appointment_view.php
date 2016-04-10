<!--显示学员的预约信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-table"></i> 学员预约信息汇总</h3>
                <div class="box-tool">
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">编号</th>
                            <th class="text-center">学员姓名</th>
                            <th class="text-center">场地</th>
                            <th class="text-center">教练</th>
                            <td class="text-center">时间</th>
                            <td class="text-center">车辆</th>
                            <th class="text-center" >操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $appointment):?>
                                <tr class="table-flag-blue">
                                    <td class="text-center"><?php echo $appointment->num;?></td>
                                    <td class="text-center"><?php echo $appointment->name;?></td>
                                    <td class="text-center"><?php echo $appointment->p_name;?></td>
                                    <td class="text-center"><?php echo $appointment->c_name;?></td>
                                    <td class="text-center"><?php echo $appointment->time;?></td>
                                    <td class="text-center"><span class="label label-success"><?php echo $appointment->number;?></span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip change" title="查看" href="#modal-1" data-toggle="modal" role="button" data-name="<?php echo $appointment->name;?>" data-num="<?php echo $appointment->num;?>" data-sex="<?php echo $appointment->sex;?>"
                                               data-phone="<?php echo $appointment->phone;?>" data-qq="<?php echo $appointment->qq;?>" data-address="<?php echo $appointment->address;?>" data-email="<?php echo $appointment->email;?>" data-idcard="<?php echo $appointment->idcard;?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip del" title="删除" data-id="<?php echo $appointment->a_id;?>"><i class="icon-trash"></i></a>
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

<div class="modal fade row" id="modal-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content box box-blue">
            <div class="box-title">
                <h3 id="myModalLabel"><i class="icon-eye-open"></i> 查看详情</h3>
                <div class="box-tool">
                    <a  aria-hidden="true" data-dismiss="modal"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">姓名</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">编号</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-num" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">性别</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-sex" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">电话</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-phone" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">QQ</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-qq" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">地址</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-address" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Email</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">身份证号</label>
                        <div class="col-sm-9 col-lg-10 controls">
                            <input type="text" readonly class="form-control input-sm modal-idcard" />
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

<!--显示学员的预约信息-->
<script type="text/javascript">
    window.onload=function() {
        $(".del").click(function(){
            var id = $(this).data("id");
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('manage_appointment/delete')?>',
                data: {id:id},
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                    location.reload();
                }
            });
        });
        $(".change").click(function(){
            //提取数据注入模态框
            $(".modal-name").val($(this).data("name"));
            $(".modal-num").val($(this).data("num"));
            if($(this).data("sex")==1){
                $(".modal-sex").val("男");
            }else if($(this).data("sex")==0){
                $(".modal-sex").val("女");
            }else{
                $(".modal-sex").val("");
            }

            $(".modal-phone").val($(this).data("phone"));
            $(".modal-qq").val($(this).data("qq"));
            $(".modal-email").val($(this).data("email"));
            $(".modal-address").val($(this).data("address"));
            $(".modal-idcard").val($(this).data("idcard"));
        });
    }
</script>