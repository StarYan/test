
<div class="row">
    <div class="col-md-12">
        <div class="box" style="margin-top: 0">
            <div class="box-title">
                <h3><i class="icon-lock"></i> 更改密码</h3>
            </div>
            <div class="box-content container">
                <form id="password-form" class="login-form" action="<?php echo site_url('/school/keyAdmin')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label" for="pre_password"><h4>原密码：</h4></label>
                        <div class="controls">
                            <input type="password" name="pre_password" id="pre_password" class="form-control">
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="new_password"><h4>新密码：</h4></label>
                        <div class="controls">
                            <input type="password" name="new_password" id="new_password" class="form-control">
                            <span class="help-inline">8-20个字符，包含大小写字母和数字的组合，不能使用特殊字符</span>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label" for="confirm_password"><h4>再次输入新密码：</h4></label>
                        <div class="controls">
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                            <span class="help-inline"></span>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="controls">
                            <button type="submit" class="btn btn-primary form-control submit">更 改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>/assets/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo base_url()?>/assets/jquery-validation/dist/additional-methods.js"></script>


<script>
    $(document).ready(function () {
        $("#password-form").validate({
            rules :{
                pre_password: {
                    required :true,
                    remote :{
                        url :"<?php echo site_url('/school/CheckPassword')?>",
                        type :"post",
                        dataType:"json",
                        data :{
                            pre_password :function(){return $("#pre_password").val();}
                        }
                    }
                },
                new_password: {
                    required :true,
                    psd :true
                },
                confirm_password: {
                    required :true,
                    equalTo :"#new_password",
                    psd :true
                }
            },
            messages :{
                pre_password: {
                    required :"原密码不能为空",
                    remote :"密码不正确"
                },
                new_password: {
                    required :"密码不能为空"
                },
                confirm_password: {
                    required :"请再次输入密码",
                    equalTo :"请确保密码一致"
                }
            },
            errorPlacement: function(error,element) {
                element.next("span").empty();
                element.next("span").css('color','red');
                error.appendTo(element.next("span"));
            }
        });
    });
</script>
