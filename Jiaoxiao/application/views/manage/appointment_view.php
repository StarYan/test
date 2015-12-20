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
                                            <a class="btn btn-sm show-tooltip change" title="View" href="#modal-1" data-toggle="modal" role="button" data-name="<?php echo $appointment->name;?>" data-num="<?php echo $appointment->num;?>" data-sex="<?php echo $appointment->sex;?>"
                                               data-phone="<?php echo $appointment->phone;?>" data-qq="<?php echo $appointment->qq;?>" data-address="<?php echo $appointment->address;?>" data-email="<?php echo $appointment->email;?>" data-idcard="<?php echo $appointment->idcard;?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip del" title="Delete" data-id="<?php echo $appointment->id;?>"><i class="icon-trash"></i></a>
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

<div class="modal fade" id="modal-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">X</button>
                <h3 id="myModalLabel">详情</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <!--<input class="form-control" type="text" placeholder="">-->
                    <ul class="list-group">
                        <input type="hidden" name="id" class="modal-id">
                        <li class="list-group-item">姓名：<span class="modal-name">00:00</span></li>
                        <li class="list-group-item">编号：<span class="modal-num" >none</span></li>
                        <li class="list-group-item">性别：<span class="modal-sex" >course name</span></li>
                        <li class="list-group-item">电话：<span class="modal-phone" >course name</span></li>
                        <li class="list-group-item">QQ：<span class="modal-qq" >course name</span></li>
                        <li class="list-group-item">地址：<span class="modal-address" >course name</span></li>
                        <li class="list-group-item">Email：<span class="modal-email" >course name</span></li>
                        <li class="list-group-item">身份证号：<span class="modal-idcard" >course name</span></li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" aria-hidden="true" data-dismiss="modal">关闭</button>
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
            $(".modal-name").html($(this).data("name"));
            $(".modal-num").html($(this).data("num"));
            $(".modal-sex").html($(this).data("sex"));
            $(".modal-phone").html($(this).data("phone"));
            $(".modal-qq").html($(this).data("qq"));
            $(".modal-email").html($(this).data("email"));
            $(".modal-address").html($(this).data("address"));
            $(".modal-idcard").html($(this).data("idcard"));
        });
    }
</script>