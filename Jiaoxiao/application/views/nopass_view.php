<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<style>
			.table,th{
				text-align: center;
			}
			
			.table{
				margin-top:30px;
			}
		</style>
		
		
	</head>
	<body>
		<!--导航条-->
		<nav class="navbar navbar-inverse">
		    <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>

			      <a class='navbar-brand' >Welcome!</a>			   
			    </div>			    
			    <div class="collapse navbar-collapse" id="navbar">
				    <ul class="nav navbar-nav">
				        <li ><a>详细的错误信息 <span class="sr-only">(current)</span></a></li>
					</ul>
					
				    <ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('manager_controller/Nopass') ?>">返回</a></li>
					</ul>    
			    </div>
		    </div>
		</nav>
		<!--导航条-->
		<!--显示信息的主体-->
		<div class="container">
			<div class="jumbotron">
				<!--没有被审核的名单-->
						<h2 class="text-center">详细的错误信息</h2>
				
						<!--要显示的信息-->
						<div class="table-responsive">
						  	<table class="table table-bordered table-hover" >
						  		<tr>
						  			流水号:<?=$list[0]->user_num ?> &nbsp;&nbsp;&nbsp;姓名:<?=$list[0]->user_name ?>
						  		</tr>
						  		
						  		<?php foreach($list as $item):?>
						  			<tr>
						  				<td><?=$item->tittle?></td><td><?=$item->value?></td><td><?=$item->wrongreason?></td>
						  			</tr>
						  		<?php endforeach;?>
						  		
						  	</table>
						</div>
						<!--要显示的信息-->
						
						<h2 class="text-center">审核人：<?=$managerInfo[0]->managername ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审核时间：<?=$managerInfo[0]->checktime ?></h2>
				
				
				
			</div>
		</div>
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>