<!--显示学员的预约信息-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-table"></i> 学员评价管理</h3>
                <div class="box-tool">
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center"> #ID</th>
                            <th class="text-center"> 学员</th>
                            <th class="text-center"> 教练</th>
                            <th class="text-center"> 学员评分</th>
                            <th class="text-center"> 学员评语</th>
                            <th class="text-center"> 评价时间</th>
                            <th class="text-center"> 操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $evaluate):?>
                                <tr class="table-flag-blue">
                                    <td class="text-center"><?php echo $evaluate->id;?></td>
                                    <td class="text-center"><?php echo $evaluate->name;?></td>
                                    <td class="text-center"><?php echo $evaluate->c_name;?></td>
                                    <td class="text-center"><?php echo $evaluate->star;?></td>
                                    <td class="text-center"><?php echo $evaluate->remark;?></td>
                                    <td class="text-center"><?php echo $evaluate->create_date;?></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-danger show-tooltip del" title="删除" data-id="<?php echo $evaluate->id;?>"><i class="icon-trash"></i></a>
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