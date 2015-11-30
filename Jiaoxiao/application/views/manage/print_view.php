<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
		<title></title>

		<script type="text/javascript">

			window.onload=function(){
				var oPrint=document.getElementById('print');
				var oOther=document.getElementById('others');
				oPrint.onclick=function(){
					oPrint.style['display']='none';
					window.print();
				}

				var id='<?=$list->wanted_car_type ?>';
				var oI=document.getElementById(id);

				if(oI==null){
					oOther.innerHTML='<?=$list->wanted_car_type ?>';
				}else{
					oI.checked=true;
				}

			}
		</script>
	</head>
	<body>
		<!--startprint-->
		<h1 class="text-center">机动车驾驶员培训学员登记表</h1>
		
		<div class="container" >
			<h5>培训机构名称：蓝光驾校</h5>
			<div class="col-md-4" style="margin-left:70%;">
				<h5>NO.<?=$list->num ?></h5>
			</div>
			<table class="table table-bordered">
				<div class="row">
					<tr>
						<td class="col-md-1">姓名</td>
						<td class="col-md-2" colspan="2"><?=$list->name ?></td>
						<td class="col-md-1">性别</td>
						<td class="col-md-1"><?=$list->sex ?></td>
						<td class="col-md-1">出生日期</td>
						<td class="col-md-4" colspan="4"><?=$list->birthday ?></td>
						<td class="col-md-2" colspan="2" rowspan="3"><img src="<?php echo base_url();?>/uploads/<?=$list->photo?>" style="width:100px;height: 100px;" /></td>
					</tr>
					
					<tr>
						<td class="col-md-1">身份证号</td>
						<td class="col-md-9" colspan="9"><?=$list->idcard ?></td>
						
					</tr>
					
					<tr>
						<td class="col-md-1">住址</td>
						<td class="col-md-9" colspan="9"><?=$list->address ?></td>
						
					</tr>
					
					<tr>
						<td class="col-md-1">联系电话</td>
						<td class="col-md-5" colspan="5"><?=$list->phone ?></td>
						<td class="col-md-1">原准驾车型</td>
						<td class="col-md-5" colspan="5"><?=$list->original_car_type ?></td>
						
					</tr>
					
					<tr>
						<td class="col-md-1" rowspan="7"><div style="margin-top: 120%;">培训车型或类别</div></td>
						<td class="col-md-5" colspan="5" rowspan="3">普通机动车驾驶员培训</td>
						<td class="col-md-6" colspan="6">A1<input type="checkbox" id="A1"/>&nbsp;&nbsp;&nbsp;A2<input type="checkbox"id="A2"/>&nbsp;&nbsp;&nbsp;A3<input type="checkbox"id="A3"/>&nbsp;&nbsp;&nbsp;B1<input type="checkbox" id="B1"/>&nbsp;&nbsp;&nbsp;B2<input type="checkbox" id="B2"/></td>
					</tr>
					
					<tr>
						<td class="col-md-6" colspan="6">C1<input type="checkbox" id="C1"/>&nbsp;&nbsp;&nbsp;C2<input type="checkbox" id="C2"/>&nbsp;&nbsp;&nbsp;C3<input type="checkbox" id="C3"/>&nbsp;&nbsp;&nbsp;C4<input type="checkbox" id="C4" />&nbsp;&nbsp;&nbsp;D<input type="checkbox"/></td>
					</tr>
					
					<tr>
						<td class="col-md-6" colspan="6">E<input type="checkbox" id="E"/>&nbsp;&nbsp;&nbsp;F<input type="checkbox" id="F"/>&nbsp;&nbsp;&nbsp;M<input type="checkbox" id="M"/>&nbsp;&nbsp;&nbsp;N<input type="checkbox" id="N"/>&nbsp;&nbsp;&nbsp;P<input type="checkbox" id="P"/></td></td>
					</tr>
					
					<tr>
						<td class="col-md-5" colspan="5" rowspan="3">道路运输驾驶员从业资格培训</td>
						<td class="col-md-6" colspan="6">道路旅客运输<input type="checkbox" id="道路旅客运输"/></td>
					</tr>
					
					<tr>
						<td class="col-md-6" colspan="6">道路货物运输<input type="checkbox" id="道路货物运输"/></td>
					</tr>
					
					<tr>
						<td class="col-md-6" colspan="6">道路危险物品运输<input type="checkbox" id="道路危险物品运输"/></td>
					</tr>
					
					<tr>
						<td class="col-md-5" colspan="5">其他培训</td>
						<td class="col-md-6" colspan="6"><div class="col-md-1" id="others" style="width:auto;"></div></td>
					</tr>
					
					<tr>
						<td class="col-md-1">入学时间</td>
						<td class="col-md-5" colspan="5"><div class="col-md-4" style="float: right;">日</div><div class="col-md-3" style="float: right;">月</div><div class="col-md-3" style="float: right;">年</div></td>
						<td class="col-md-1">结业时间</td>
						<td class="col-md-5" colspan="5"><div class="col-md-4" style="float: right;">日</div><div class="col-md-3" style="float: right;">月</div><div class="col-md-3" style="float: right;">年</div></td>
					</tr>
					
					<tr>
						<td class="col-md-1" rowspan="7"><div style="margin-top:100%;">结业考核</div></td>
						<td class="col-md-2" colspan="2">结业证编号</td>
						<td class="col-md-3" colspan="3"><div class="col-md-1"></div></td>
						<td class="col-md-1">发证日期</td>
						<td class="col-md-5" colspan="5"><div class="col-md-4" style="float: right;">日</div><div class="col-md-3" style="float: right;">月</div><div class="col-md-3" style="float: right;">年</div></td>
					</tr>
					
					<tr>
						<td class="col-md-11" colspan="11" rowspan="6">
							<div class="row" style="height:200px;">
								<div class="col-md-2">审核意见：</div>
								<div class="col-md-2 " style="margin-top:25%;margin-left:60%;">培训机构：(盖章)</div>
								<div class="col-md-3 " style="margin-top:2%;margin-left:60%;">
									<div class="col-md-4" style="float: left;">年</div>
									<div class="col-md-4" style="float: left;">月</div>
									<div class="col-md-4" style="float: left;">日</div>
								</div>
							</div>
						</td>
						
					</tr>
					
				</div>
			
			</table>	
			<h5>注：1.标注有“<input type="checkbox" />”的为选择项，选择后“<input type="checkbox" />”中划“&radic;”</h5>
			<!--endprint-->
			<input type="button" value="确认打印" class="col-md-offset-11 btn btn-primary" style="margin-top:20px; margin-bottom:30px; " id="print" />
		</div>


		
	</body>
</html>
