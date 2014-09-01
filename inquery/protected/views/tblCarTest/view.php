
<?php $this->widget('zii.widgets.CDetailView', array(
		'data'       => $model,
		'attributes' => array(
			// 'id',
			'xh',
			'hphm',
			'cllx',
			'rlzl',
			'ccdjrq',
			'jcrq',
			'jcjg',
			'jcff',
			'jccs',
			'jc_result',
		),
		'htmlOptions' => array(
			'class' => "table-striped table-bordered view-table",
			'style' => 'width:100%;',
		)
	));?>
