<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<style>
		#shenhe a:visited{
			color:red;
		}
		
		.table{
			margin-top:30px;
		}
		
		.btn-primary{
			float:right;
			margin-top:20px;
		}
		
		.container{
			width:70%;
		}
		
		table button{
			background-color: red;
			color:white;
		}
	</style>
		
	<script>
		$(document).ready(function(){
			$("table button").eq(0).click(function(){
				$("table input").eq(0).removeAttr("disabled");
			});
			$("table button").eq(1).click(function(){
				$("table input").eq(1).removeAttr("disabled");
			});
			$("table button").eq(2).click(function(){
				$("table input").eq(2).removeAttr("disabled");
			});
			$("table button").eq(3).click(function(){
				$("table input").eq(3).removeAttr("disabled");
			});
			$("table button").eq(4).click(function(){
				$("table input").eq(4).removeAttr("disabled");
			});
			$("table button").eq(5).click(function(){
				$("table input").eq(5).removeAttr("disabled");
			});
			$("table button").eq(6).click(function(){
				$("table input").eq(6).removeAttr("disabled");
			});
			$("table button").eq(7).click(function(){
				$("table input").eq(7).removeAttr("disabled");
			});
			$("table button").eq(8).click(function(){
				$("table input").eq(8).removeAttr("disabled");
			});
		});
	</script>	
	
	</head>
	<body>
		<!--导航条-->
		<nav class="navbar navbar-inverse">
		    <div class="container">
			    <div class="navbar-header">
			      	<a class="navbar-brand">Welcome!</a>	
			    </div>			    
			    <div class="collapse navbar-collapse">
				    <ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('manager_controller/Nocheck')?>" >返回</a></li>
					</ul>    
			    </div>
		    </div>
		</nav>
		<!--导航条-->
		
		<!--显示信息的主体-->
		<div class="container">
			<div class="jumbotron">
				<h2 class="text-center">报名信息审核页面</h2>
				
				<!--要显示的信息-->
				<div class="table-responsive" >
					<form action="<?php echo site_url('check_controller/Submited')?>/<?=$list[0]->user_num?>" method="post" class="form-group">
						<table class="table table-bordered table-hover" id="shenhe">
					  		<tr>
					  			<td>姓名</td><td><?=$list[0]->user_name?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="姓名" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>性别</td><td><?=$list[0]->sex?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="性别" placeholder="输入错误原因" class="form-control" disabled  /></td>
					  		</tr>
					  		<tr>
					  			<td>出生日期</td><td><?=$list[0]->birthday?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="出生日期" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>身份证号</td><td><?=$list[0]->user_id?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="身份证号" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>住址</td><td><?=$list[0]->address?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="住址" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>联系电话</td><td><?=$list[0]->phone_number?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="联系电话" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>原准驾车型</td><td><?=$list[0]->original_car_type?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="原准驾车型" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>培训车型</td><td><?=$list[0]->car_type?></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="培训车型" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
					  		<tr>
					  			<td>用户照片</td><td><img src="<?php echo base_url();?>/uploads/<?=$list[0]->photo?>" width="100px" height="100px"/></td><td><button type="button" class="btn">错误</button></td><td><input type="text" name="用户照片" placeholder="输入错误原因" class="form-control" disabled /></td>
					  		</tr>
				  		</table>
				  		<button type="submit" class="btn btn-primary">提交审核</button>
					</form>
				  	
				</div>
				<!--要显示的信息-->
				
				
				
			</div>
		</div>
		<!--显示信息的主体-->
		<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
