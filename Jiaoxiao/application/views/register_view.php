<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link type="text/css" rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/demo.css" />

		<!--必要样式-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/component.css" />
		<style>
			.clear{
				clear:both;
			}
			
			a:link, a:visited {
					color: #FFFFFF;  
					text-decoration:none;	
					}
					
			a:hover, a:active {
					color: #FFFFFF;	 
					text-decoration:none;
					}		
		
			.header{
				width:100%;
				margin:auto;
				height: 100px;
				background-color:black;
			}
			


			
			.footer{
				width:100%;
				background-color:blue;
				text-align: center;
				height:170px;
				padding-top:35px;
				border-top-width:1px;
				border-top-style:solid;
				border-top-color:#00EAFF;
			}
			
			#main{
				padding-bottom:5%;
			}
			
			.bottom{
				width:100%;
				height:35px;
				background-color:#00A2FF;
				margin-top:15px;
			}
			
			.bot{
				width:744px;
				height:27px;
				margin:auto;
				padding-top:8px;
			}
			
			.bot table{
				width:744px;
				height:18px;
				border:0;
			}
			
			.bot table tr td{
				border-color:#FFF;
				border-right-width:2px;
				border-right-style:solid;
				line-height:18px;
				text-align:center;
			}
			
			.bot table tr td a{
				color:#FFF;
			}
			
			.bot table tr td a:hover{
				border-bottom-width:1px;
				border-bottom-style:solid;
				border-bottom-color: #FFF;
			}
			
		
			
			.form-horizontal{
				margin-top:40px;
			}
			
			.btn-primary{
				width:80%;
			}

			.navbar-default{
				background-color: rgba(0,0,0,0.1);
			}
			



			#clouds{
				padding: 100px 0;
				background: #c9dbe9;
				background: -webkit-linear-gradient(top, #c9dbe9 0%, #fff 100%);
				background: -linear-gradient(top, #c9dbe9 0%, #fff 100%);
				background: -moz-linear-gradient(top, #c9dbe9 0%, #fff 100%);
			}
	
			/*Time to finalise the cloud shape*/
			.cloud {
				width: 200px; height: 60px;
				background: #fff;
				
				border-radius: 200px;
				-moz-border-radius: 200px;
				-webkit-border-radius: 200px;
				
				position: relative; 
			}
	
			.cloud:before, .cloud:after {
				content: '';
				position: absolute; 
				background: #fff;
				width: 100px; height: 80px;
				position: absolute; top: -15px; left: 10px;
				
				border-radius: 100px;
				-moz-border-radius: 100px;
				-webkit-border-radius: 100px;
				
				-webkit-transform: rotate(30deg);
				transform: rotate(30deg);
				-moz-transform: rotate(30deg);
			}
	
			.cloud:after {
				width: 120px; height: 120px;
				top: -55px; left: auto; right: 15px;
			}
	
			/*Time to animate*/
			.x1 {
				-webkit-animation: moveclouds 15s linear infinite;
				-moz-animation: moveclouds 15s linear infinite;
				-o-animation: moveclouds 15s linear infinite;
			}
	
			/*variable speed, opacity, and position of clouds for realistic effect*/
			.x2 {
				left: 200px;
				
				-webkit-transform: scale(0.6);
				-moz-transform: scale(0.6);
				transform: scale(0.6);
				opacity: 0.6; /*opacity proportional to the size*/
				
				/*Speed will also be proportional to the size and opacity*/
				/*More the speed. Less the time in 's' = seconds*/
				-webkit-animation: moveclouds 25s linear infinite;
				-moz-animation: moveclouds 25s linear infinite;
				-o-animation: moveclouds 25s linear infinite;
			}
	
			.x3 {
				left: -250px; top: -200px;
				
				-webkit-transform: scale(0.8);
				-moz-transform: scale(0.8);
				transform: scale(0.8);
				opacity: 0.8; /*opacity proportional to the size*/
				
				-webkit-animation: moveclouds 20s linear infinite;
				-moz-animation: moveclouds 20s linear infinite;
				-o-animation: moveclouds 20s linear infinite;
			}
	
			.x4 {
				left: 470px; top: -250px;
				
				-webkit-transform: scale(0.75);
				-moz-transform: scale(0.75);
				transform: scale(0.75);
				opacity: 0.75; /*opacity proportional to the size*/
				
				-webkit-animation: moveclouds 18s linear infinite;
				-moz-animation: moveclouds 18s linear infinite;
				-o-animation: moveclouds 18s linear infinite;
			}
	
			.x5 {
				left: -150px; top: -150px;
				
				-webkit-transform: scale(0.8);
				-moz-transform: scale(0.8);
				transform: scale(0.8);
				opacity: 0.8; /*opacity proportional to the size*/
				
				-webkit-animation: moveclouds 20s linear infinite;
				-moz-animation: moveclouds 20s linear infinite;
				-o-animation: moveclouds 20s linear infinite;
			}
	
			@-webkit-keyframes moveclouds {
				0% {margin-left: 1000px;}
				100% {margin-left: -1000px;}
			}
			@-moz-keyframes moveclouds {
				0% {margin-left: 1000px;}
				100% {margin-left: -1000px;}
			}
			@-o-keyframes moveclouds {
				0% {margin-left: 1000px;}
				100% {margin-left: -1000px;}
			}	
			
			.btn-primary{
				background-color:#c9dbe9;
				border-color: #c9dbe9;
				color:white;
			}
			
			.btn-primary:hover{
				background-color:rgba(1,1,1,0.4);
				border-color: white;
			}
		</style>
		
		<script type="text/javascript">
			
			window.onload=function(){
				var oS1=document.getElementById("select1");
				var oS2=document.getElementById("select2");
				var oSubmit=document.getElementById('submit');
				var oU=document.getElementById('USER_ID');
				
				function addopt(t,v){
					var opt=document.createElement("option");
					opt.text=t;
					opt.value=v;
					opt.selected=false;
					oS2.add(opt);
				}
				
				oS1.onchange=function myselect(){
					var number=oS2.options.length;
					var oI=document.getElementById('others');
				
					for(var i=number-1;i>=0;i--){
						oS2.removeChild(oS2.childNodes.item(i));
					}
					
					if(oS1.value=="type1"){
						if(oS2.style['display']='none'){
							oS2.style['display']='block';
							oI.style['display']='none';
							oI.name='';
							oS2.name='CAR_TYPE'
						}
						addopt("A1","A1");
						addopt("A2","A2");
						addopt("A3","A3");
						addopt("B1","B1");
						addopt("B2","B2");
						addopt("C1","C1");
						addopt("C2","C2");
						addopt("C3","C3");
						addopt("C4","C4");
						addopt("D","D");
						addopt("E","E");
						addopt("F","F");
						addopt("M","M");
						addopt("N","N");
						addopt("P","P");
					}
					if(oS1.value=="type2"){
						if(oS2.style['display']='none'){
							oS2.style['display']='block';
							oI.style['display']='none';
							oI.name='';
							oS2.name='CAR_TYPE'
						}
						addopt("道路旅客运输","道路旅客运输");
						addopt("道路货物运输","道路货物运输");
						addopt("道路危险货物运输","道路危险货物运输");
					}
					if(oS1.value=="type3"){
						
						oS2.style['display']='none';
						oI.style['display']='block';
						oS2.name='';
						oI.name='CAR_TYPE'
						
					}
					
				}
				
				oSubmit.onclick=function() { 
					if(oU.value != ""){
						// 身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X 
						var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; 
						if(reg.test(oU.value) === false){ 
						alert("身份证输入不合法"); 
						return false; 
						} 
					}	
				} 
			}

		</script>
		<title></title>
	</head>
	<body>
		<div class="header">
			<div id="clouds">
				<div class="cloud x1"></div>
				<div class="cloud x2"></div>
				<div class="cloud x3"></div>
				<div class="cloud x4"></div>
				<div class="cloud x5"></div>
			</div>
		</div>

		 <nav class="navbar navbar-default ">
		    <div class="container " style="width: 50%;">
			    <div class="navbar-header ">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	
			      </button>		   
			    </div>		
			    	    
			    <div class="collapse navbar-collapse cl-effect-6" id="navbar">
                    <a href="#" data-hover="首&nbsp;&nbsp;页"><span>首&nbsp;&nbsp;页</span></a>
					<a href="#" data-hover="关于我们"><span>关于我们</span></a>
					<a href="#" data-hover="新闻中心"><span>新闻中心</span></a>
					<a href="#" data-hover="服务与支持"><span>服务与支持</span></a>
					<a href="#" data-hover="网上报名"><span>网上报名</span></a>
					<a href="#" data-hover="联系方式"><span>联系方式</span></a>
				      
			    </div>
		    </div>
		</nav>
		 
		 
		 
		<div id="main">
			<div class="container" style="background-color: rgba(1,1,1,0.0); width: 60%;" >
				<h1 class="text-center">用户网上报名</h1>
				<form action="<?php echo site_url('register_controller/Add_message')?>" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-3 control-label" >姓名：</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="NAME" placeholder="输入你的真实姓名" required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">性别：</label>
						<div class="col-md-6">
							<select class="form-control" name="SEX" >
								<option>请选择性别</option>
								<option value="男">男</option>
								<option value="女">女</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">出生日期：</label>
						<div class="col-md-6">
							<input type="date" class="form-control" name="BIRTHDAY" placeholder="输入你的出生日期" required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">身份证号：</label>
						<div class="col-md-6">
							<input type="text" id="USER_ID" class="form-control" name="USER_ID" placeholder="输入你的身份证号"  required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">住址：</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="ADDRESS" placeholder="输入你的住址" required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">联系电话：</label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="PHONE" placeholder="输入你的联系电话" required />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">原准驾车型：</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="O_CAR_TYPE" placeholder="输入你的原准驾车型" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">培训车型或类别：</label>
						<div class="col-md-5">
							<select class="form-control" id="select1" >
								<option selected="selected">请选择培训类别</option>
								<option value="type1">普通机动车驾驶员培训</option>
								<option value="type2">道路运输驾驶员从业资格培训</option>
								<option value="type3">其他培训</option>
							</select>
						</div>
						<div class="col-md-4">
							<select class="form-control" name="CAR_TYPE" id="select2">
								
							</select>
							<input type="text" style="display:none" id="others"  />
						</div>
						
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">用户照片上传：</label>
						<div class="col-md-9">
							<input type="file" style="padding:6px 12px;" name="PHOTO" id="PHOTO"  required />
						</div>
					</div>
					
					<div class="form-group" style="margin-top:40px;">
						<div class="col-md-4  col-md-offset-2 ">
							<button type="submit" class="btn btn-primary cl-effect-1" id="submit">提交</button>
						</div>
						<div class="col-md-4 ">
							<button type="reset" class="btn btn-primary cl-effect-1">重置</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<!--
		<div class="bottom">
			<div class="bot">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td><a>首&nbsp;&nbsp;页</a></td>
						<td><a>关于我们</a></td>
						<td><a>新闻中心</a></td>
						<td><a>服务与支持</a></td>
						<td><a>网上报名</a></td>
						<td><a>联系方式</a></td>
					</tr>
				</table>
			</div>
		</div>
		
		 
		<div class="footer">
			
		</div>
		 -->
		<?php
			if(!empty($flag)){
		?>
			<script>
				oM=document.getElementById('main');
				oM.innerHTML="<h1 class='text-center' style='margin-top: 15%;'>注册成功</h1>";
			</script>
		<?php	
			}
		?>
		
		
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
