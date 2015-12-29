<!--驾校排名管理-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-table"></i> 驾校排名管理</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_ranking/create') ?>"> 添加新闻信息</a>
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">编号</th>
                            <th class="text-center">驾校名字</th>
                            <th class="text-center">驾校地址</th>
                            <th class="text-center">驾校电话</th>
                            <th class="text-center">驾校网址</th>
                            <th class="text-center">驾校考试通过率</th>
                            <th class="text-center">驾校分数</th>
                            <th class="text-center">创建人</th>
                            <th class="text-center">创建时间</th>
                            <th class="text-center">更新人</th>
                            <th class="text-center">更新时间</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($result)):?>
                            <?php foreach($result as $ranking):?>
                                <tr class="table-flag-blue">
                                    <td class="text-center"><?php echo $ranking['id'];?></td>
                                    <td class="text-center"><?php echo $ranking['school_name'];?></td>
                                    <td class="text-center"><?php echo $ranking['school_address'];?></td>
                                    <td class="text-center"><?php echo $ranking['school_tel'];?></td>
                                    <td class="text-center"><a target="_blank" href="<?=$ranking['school_url']?>"><?=$ranking['school_url']?></a></td>
                                    <td class="text-center"><?php echo $ranking['pass_rate'];?>%</td>
                                    <td class="text-center"><?php echo $ranking['score'];?></td>
                                    <td class="text-center"><span class="label label-info"><?php echo $ranking['create_id'];?></span></td>
                                    <td class="text-center"><?php echo $ranking['create_date'];?></td>
                                    <td class="text-center"><span class="label label-info"><?php echo $ranking['update_id'];?></span></td>
                                    <td class="text-center"><?php echo $ranking['update_date'];?></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/manage_ranking/view').'/'.$ranking['id']; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/manage_ranking/update').'/'.$ranking['id']; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/manage_ranking/delete').'/'.$ranking['id']; ?>"><i class="icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <?php if(!empty($link)){echo $link;} ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--驾校排名管理-->