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
				        
				        <li ><a href="<?php echo site_url('manager_controller/Nopass')?>">审核不合格 <span class="sr-only">(current)</span></a></li>
				        
				        
        				
						<form class="navbar-form navbar-left" method="post" role="search" action="<?php echo site_url('manager_controller/Nopass')?>" enctype="multipart/form-data">
					        <div class="form-group">
					          <input type="text" class="form-control" name="KEYWORD" placeholder="输入姓名或流水号" required oninvalid="setCustomValidity('请输入姓名或者流水号');" oninput="setCustomValidity('');">
					        </div>
					        <button type="submit" class="btn btn-default">搜索</button>
				      	</form>
					</ul>
					
				    <ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('login_controller/Login') ?>">退出</a></li>
					</ul>    
			    </div>
		    </div>
		</nav>
		<!--导航条-->