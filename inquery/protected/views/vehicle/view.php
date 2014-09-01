


<?php $this->widget('zii.widgets.CDetailView', array(
		'data'       => $model,
		'attributes' => array(
			// 'id',
			'FZJG',
			'hphm',
			'hpzl',
			'cllx',
			'ccdjrq',
			'rlzl',
			'yxgz',
			'hbdbqk',
		),
		'htmlOptions' => array(
			'class' => "table-striped table-bordered view-table",
			'style' => 'width:100%;',
		)
	));?>

<?php
$date1       = date("Y-m-d", mktime(0, 0, 0, date('m') + 1, 1, date('Y')));
$expire_date = $model->yxgz;

if ($date1 > $expire_date) {
	?>
	<br>
					<div class="alert alert-danger">
								<h4>提示：</h4>
								<p>您的车辆检验有效期将止,请及时更检</p>
								</div>
	<?php
}

?>

