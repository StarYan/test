<!--新闻信息汇总-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3><i class="icon-table"></i> 新闻信息</h3>
                <div class="box-tool">
                    <a class="btn btn-primary" href="<?php echo site_url('/manage_news/create') ?>"> 添加新闻信息</a>
                </div>
            </div>
            <div class="box-content">
                <div class="table-responsive">
                    <table class="table table-advance">
                        <thead>
                        <tr>
                            <th class="text-center">编号</th>
                            <th class="text-center">新闻标题</th>
                            <th class="text-center">新闻链接</th>
                            <th class="text-center">新闻概要</th>
                            <td class="text-center">创建时间</th>
                            <td class="text-center">创建人</th>
                            <th class="visible-md visible-lg text-center" style="width:130px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                            <?php foreach($result as $newsInfo):?>
                                <tr class="table-flag-blue">
                                    <td class="text-center"><?php echo $newsInfo['id'];?></td>
                                    <td class="text-center"><?php echo $newsInfo['title'];?></td>
                                    <td class="text-center"><a href="<?php echo $newsInfo['link'];?>" target="_blank"><?php echo $newsInfo['link'];?></a></td>
                                    <td class="text-center"><?php echo $newsInfo['content'];?></td>
                                    <td class="text-center"><?php echo $newsInfo['create_date'];?></td>
                                    <td class="text-center"><span class="label label-info"><?php echo $newsInfo['create_id'];?></span></td>
                                    <td class="visible-md visible-lg text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm show-tooltip" title="查看" href="<?php echo site_url('/manage_news/view').'/'.$newsInfo['id']; ?>"><i class="icon-zoom-in"></i></a>
                                            <a class="btn btn-sm show-tooltip" title="修改" href="<?php echo site_url('/manage_news/update').'/'.$newsInfo['id']; ?>"><i class="icon-edit"></i></a>
                                            <a class="btn btn-sm btn-danger show-tooltip" title="删除" href="<?php echo site_url('/manage_news/delete').'/'.$newsInfo['id']; ?>"><i class="icon-trash"></i></a>
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
<!--新闻信息汇总-->