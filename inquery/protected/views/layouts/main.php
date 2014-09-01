<?php /* @var $this Controller */?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/print.css" media="print" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/bootstrap/css/bootstrap.min.css"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/form.css" />
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

	.custom_container{
	}

	.alert {
		padding: 15px;
		margin-bottom: 20px;
		border: 1px solid transparent;
		border-radius: 4px;
	}

	.alert-danger {
		color: #a94442;
		background-color: #f2dede;
		border-color: #ebccd1;
	}

	table.view-table th, table.view-table td {
		font-size: 2.5em;
		border: 1px white solid;
		padding: 10px!important;
		vertical-align: top;
	}

	table.view-table th{
		width:240px;
		text-align: right;
	}



	</style>
	<title><?php echo CHtml::encode($this->pageTitle);?></title>
</head>

<body>

<div class="custom_container" id="page">

	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name);?></div>
	</div> -->

	<!-- header -->





<?php echo $content;?>
<div class="clear"></div>

	<div id="footer">
		Copyright &copy;
<?php echo date('Y');
?>by gdepc.<br/>
		All Rights Reserved.<br/>
<?php echo Yii::powered();?>
</div><!-- footer -->

</div><!-- page -->

</body>
</html>
