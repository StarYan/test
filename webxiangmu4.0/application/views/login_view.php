<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<meta charset="UTF-8"/>
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.let_it_snow.js"></script>
	
	<style>
		body{
			background-color: #f4645f;
			background-image: url(<?php echo base_url();?>/images/1.jpg );
			padding-top: 40px;
  			padding-bottom: 40px;
		}
		.form-signin {
  			max-width: 330px;
 			 padding: 15px;
  			margin: 0 auto;
		}
		
		.btn-primary{
			background-color:rgba(1,1,1,0.3);
			border-color: white;
			color:white;
		}
		
		.btn-primary:hover{
			background-color:rgba(0,0,0,0.7);
			border-color:white;
		}
		
		.alert-warning{
			background-color:rgba(1,1,1,0.3);
			color:white;
			
		}
		
		canvas {
		  display: block;
		  width: 100%;
		  height: 100%;
		  top: 0;
		  left: 0;
		  position: fixed;
		}

	</style>

</head>
<body>
	
	<canvas width="100%" height="100%" class="snow"></canvas>
	<div class="container" style="position: relative;">
		<form class="form-signin" action="<?php echo site_url('/login_controller/Check')?>" method="post">
        <h2 class="form-signin-heading text-center">后台登陆</h2>
        <label for="inputID" >用户ID：</label>
        <input type="text" id="inputID" class="form-control" name="ID" placeholder="User ID" required autofocus>
        <label for="inputPassword" >用户密码：</label>
        <input type="password" id="inputPassword" class="form-control" name="PASSWORD" placeholder="Password" required>
         
		
		<br />
		<br />

        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
        <button class="btn btn-lg btn-primary btn-block" type="reset">重置</button>
      </form>
	</div>
	<script type="text/javascript">
	  $(document).ready( function() {
	    $("canvas.snow").let_it_snow();
	  });
    
  	</script>
	<?php
		if (!empty($errno)) {
			if ($errno==1) {
				echo "<div class='alert alert-warning container' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				用户密码错误，请重新填写</div>";
			}
			if ($errno==2) {
				echo "<div class='alert alert-warning container' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				用户ID不存在，请重新填写</div>";
			}
		}
		
	?>


	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>