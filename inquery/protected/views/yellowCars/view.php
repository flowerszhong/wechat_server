
<?php $this->widget('zii.widgets.CDetailView', array(
		'data'       => $model,
		'attributes' => array(
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
		'htmlOptions' => array(
			'class' => "table-striped table-bordered view-table",
			'style' => 'width:100%;',
		)
	));?>
<br>
<div class="alert alert-danger">
<h4>提示：</h4>
<p>您的车辆属高污染物排放车（黄标车），限制区域行驶，请尽快淘汰，提前淘汰可以领取相应的补贴资金。</p>
<p>根据《广东省大气污染防治目标责任书》和《广东省大气污染防治行动方案（2014～2017年）》（粤府〔2014〕6号），要求到2015年全省淘汰2005年底前注册的营运“黄标车”、基本淘汰珠三角地区所有“黄标车”，到2017年基本淘汰全省范围的“黄标车”。</p>
<p>各市主城区禁止黄标车行驶（限行区域可以在本APP地图中查询），黄标车驶入限行区域，每次罚款300元，其中深圳每次罚款500元、记3分。</p>

</div>

