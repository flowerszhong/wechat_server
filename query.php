<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>查询</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	.query-table td{
		padding: 5px;
	}
	.query-table{
		margin: 20px 0 20px 0;
	}
	.th{
		text-align: right;
		font-weight: bold;
	}
	</style>
</head>
<body>

<div class="container">
	<button type="button" class="btn btn-primary btn-lg btn-block">&gt;&gt;机动车状态查询&lt;&lt;</button>

	 <form class="form-inline" role="form">
	  <table class='table-striped table-bordered query-table' style="width:100%;">
	  	<tr>
	  		<td style="width:30%;">车牌号</td>
	  		<td>
		  		<div class="form-group">
		  			<select class="form-control">
		  				<option>粤</option>
		  				<option>粤</option>
		  				<option>粤</option>
		  				<option>粤</option>
		  			</select>
		  			<input type="text" placeholder="请输入车牌号" class="form-control" />
		  		</div>
	  			
	  		</td>
	  	</tr>
	  		<tr>
	  		<td>
	  			车辆类型
	  		</td>
	  		<td>
	  			<select class="form-control">
	  				<option>小型汽车</option>
	  				<option>狂派</option>
	  				<option>博派</option>
	  			</select>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td>识别号</td>
	  		<td>
		  		<div class="form-group">
		  			<input type="text" placeholder="请输入识别号" class="form-control" />
		  		</div>
	  		</td>
	  	</tr>
		<tr>
	  		<td>发动机号</td>
	  		<td>
		  		<div class="form-group">
		  			<input type="text" placeholder="请输入发动机号" class="form-control" />
		  		</div>
	  		</td>
	  	</tr>
	  	<tr>
	  		<td>验证码</td>
	  		<td>
		  		<div class="form-group">
		  			<input type="text" placeholder="请输入验证码" class="form-control" /><label>获取验证码</label>
		  		</div>
	  		</td>
	  </table>


	<button type="button" class="btn btn-success btn-lg btn-block">查询</button>

	</form>
</div>



<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('.query-table tr').find('td:first').addClass('th');
	});
</script>
</body>
</html>

