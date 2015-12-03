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
                            <button class="btn btn-primary" type="submit">提交</button>
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
                            <tr>
                                <td>1</td>
                                <td>北师</td>
                                <td>王小明</td>
                                <td>14:00-16:00</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="#">修改</a>
                                    <a class="btn btn-danger btn-sm" href="#">删除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
