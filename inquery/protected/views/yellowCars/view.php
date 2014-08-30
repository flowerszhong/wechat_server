
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		// 'FZJG',
		'car_id',
		'plate_type',
		'car_type',
		'use_type',
		'reg_date',
		'oil',
		'valid_expire_date',
		'Manufacture_date',
	),
	'htmlOptions'=>array(
		'class'=> "detail-view table-striped table-bordered query-table",
		'style'=>'width:100%;'
	)
)); ?>
