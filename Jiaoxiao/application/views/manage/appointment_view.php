<!--
 * Created by PhpStorm.
 *edit by chenzhixin

 -->


<!--添加教练和场地预约项-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-blue">
            <div class="box-title">
                <h3>添加预约项</h3>
            </div>
            <div class="box-content">
                <from class="form-horizontal" action="#" >
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">场地：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="addplace">
                                <!--<option value="1">北师大</option>-->
                            </select>
                        </div>
                        <label class="col-sm-2 col-lg-2 control-label">教练：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="addcoach">

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">时间：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="addtime">
                                <option value="1">10:00-12:00</option>
                                <option value="2">13:00-15:00</option>
                                <option value="3">16:00-18:00</option>
                                <option value="4">20:00-22:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-5 col-lg-10 col-lg-offset-4">
                            <button class="btn btn-primary"  id="addbut">提交</button>
                            <button class="btn" type="button">取消</button>
                        </div>
                    </div>
                </from>

            </div>
        </div>
    </div>
</div>

<!--查询-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-gray">
            <div class="box-title">
                <h3>查询</h3>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action='<?php echo site_url('manage_appointment/find')?>' method="post">
                    <input type="hidden" id="id" name='adminid' value='<?php echo $dataAdmin->id;?>'/>
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">场地：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" id="searchplace" name="searchplace">
                                <option value="">选项</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-lg-2 control-label">教练：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="searchcoach" name="searchcoach">
                                <option value="">选项</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">时间：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="searchtime" name="searchtime">
                                <option value="1">10:00-12:00</option>
                                <option value="2">13:00-15:00</option>
                                <option value="3">16:00-18:00</option>
                                <option value="4">20:00-22:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-5 col-lg-10 col-lg-offset-4">
                            <button class="btn btn-primary" type="submit">提交查询</button>
                            <button class="btn" type="button">取消</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover fill-head">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>场地</th>
                                <th>教练</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($result):?>
                        <?php foreach($result as $user):?>
                            <tr>
                                <td ><?php echo $user->id;?></td>
                                <td ><?php echo $user->pname;?></td>
                                <td ><?php echo $user->cname;?></td>
                                <td ><?php echo $user->time;?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm change" data-time="<?php echo $user->time;?>" data-cname="<?php echo $user->cname;?>" data-pname="<?php echo $user->pname;?>" data-id="<?php echo $user->id;?>" data-toggle="modal" role="button" href="#modal-1">修改</a>
                                    <a class="btn btn-danger btn-sm del" data-id="<?php echo $user->id;?>">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <?php echo $link;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true">×</button>
                <h3 id="mymodalLabel">修改</h3>
            </div>
            <form action="<?php echo site_url('manage_appointment/modify')?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                            <!--<input class="form-control" type="text" placeholder="">-->
                        <ul class="list-group">
                            <input type="hidden" name="id" class="modal-id">
                            <li class="list-group-item">原时间：<span class="modal-time">00:00</span></li>
                            <li class="list-group-item">原场地：<span class="modal-place" >none</span></li>
                            <li class="list-group-item">原课程：<span class="modal-coach" >course name</span></li>
                            <li class="list-group-item">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">修改为：</span>
                                    <input type="text" class="form-control" placeholder="时间" aria-describedby="basic-addon1" name="time"/>
                                    <input type="text" class="form-control" placeholder="场地" aria-describedby="basic-addon1" name="place"/>
                                    <input type="text" class="form-control" placeholder="教练" aria-describedby="basic-addon1" name="coach"/>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" aria-hidden="true" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-dismiss="modal" type="submit">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/jquery/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    window.onload=function() {
        var addbut = document.getElementById("addbut");
        var place = document.getElementById("addplace");
        addbut.onclick = function () {
//1.获取文本框的数据
            //通过JQuery的方式获取
            var place = $("#addplace");
            var coach = $("#addcoach");
            var time = $("#addtime");
            //获取节点的值
            var placeval = place.val();
            var coachval = coach.val();
            var timeval = time.val();
//2.将文本框的数据发送到服务器端
            $.ajax({
                type: "POST",
                url: '<?php echo site_url('manage_appointment/saveappoint')?>',
                data: {
                    placeid: placeval,
                    coachid: coachval,
                    timeid: timeval
                },
                dataType: "json",
                success: function (data) {
                    alert(data.msg);
                }
            });
            //alert(document.getElementById("addplace").value);
        }

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getplace')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                //var html = "";
                $("#addplace").empty();
                $("#searchplace").empty();
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#addplace").append(str);
                    $("#searchplace").append(str);
                    //html += "ID:"+data.data[i].id +"name:"+data.data[i].name;
                }
            }
        });

        $.ajax({
            type: "POST",
            url: '<?php echo site_url('manage_appointment/getcoach')?>',
            data: {},
            dataType: "json",
            success: function (data) {
                //var html = "";
                $("#addcoach").empty();
                $("#searchcoach").empty();
                for (var i = 0; i < data.data.length; i++) {
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#addcoach").append(str);
                    $("#searchcoach").append(str);
                    //html += "ID:"+data.data[i].id +"name:"+data.data[i].name;
                }
            }
        });

        $(".change").click(function(){
            //提取数据注入模态框
            $(".modal-coach").html($(this).data("cname"));
            $(".modal-place").html($(this).data("pname"));
            $(".modal-time").html($(this).data("time"));
            $(".modal-id").attr("value",$(this).data("id"));
        });

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