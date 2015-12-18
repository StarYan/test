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
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
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
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="View" href="#"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="Edit" href="#"><i class="icon-edit"></i></a>
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
    }
</script>