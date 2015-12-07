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
                                <option value="1">北师大</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-lg-2 control-label">教练：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1" id="addcoach">
                                <option value="1">王小明</option>
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
                <from class="form-horizontal" action="#">
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">场地：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1">
                                <option value="">选项</option>
                            </select>
                        </div>
                        <label class="col-sm-2 col-lg-2 control-label">教练：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1">
                                <option value="">选项</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label">时间：</label>
                        <div class="col-sm-3 col-lg-3 controls">
                            <select class="form-control" tabindex="1">
                                <option value="">选项</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-5 col-lg-10 col-lg-offset-4">
                            <button class="btn btn-primary" type="submit">提交查询</button>
                            <button class="btn" type="button">取消</button>
                        </div>
                    </div>
                </from>
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
                                <td><?php echo $user->id;?></td>
                                <td><?php echo $user->pname;?></td>
                                <td><?php echo $user->cname;?></td>
                                <td><?php echo $user->time;?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="#">修改</a>
                                    <a class="btn btn-danger btn-sm" href="#">删除</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var addbut = document.getElementById("addbut");
    var place = document.getElementById("addplace");
    addbut.onclick = function(){
//1.获取文本框的数据
        //通过JQuery的方式获取
        var place = $("#addplace");
        var coach = $("#addcoach");
        var time = $("#addtime");
        //获取节点的值
        var placeval = place.val();
        var coachval = coach.val();
        var timeval = time.val();
//2.将文本框的数据发送到服务器端的servlet
            $.ajax({
                type:"POST",
                url:'<?php echo site_url('manage_appointment/saveappoint')?>',
                data:{
                    placeid:placeval,
                    coachid:coachval,
                    timeid:timeval
                },
                dataType:"json",
                success:function(data){
                    alert(data.msg);
/*//首先需要将传过来的DOM对象转化为jquery对象
                    var jqueryObj = $(data);
//获取message节点
                    var messageNods = jqueryObj.children();
//获取文本内容
                    var responseText = messageNods.text();
                    $("#result").html(responseText);*/
                }
            });
        alert(document.getElementById("addplace").value);
    }

    place.change = function(){
        $.ajax({
            type:"POST",
            url:'<?php echo site_url('manage_appointment/getplace')?>',
            data:{
            },
            dataType:"json",
            success:function(data){
                //var html = "";
                $("#addplace").empty();
                for(var i = 0;i<data.data.length;i++){
                    var str = " <option value=" + data.data[i].id + ">" + data.data[i].name + "</option>";
                    $("#addplace").append(str);
                    //html += "ID:"+data.data[i].id +"name:"+data.data[i].name;
                }
            }
        });
    }

</script>