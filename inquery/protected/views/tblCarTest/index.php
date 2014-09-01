<?php
/* @var $this TblCarTestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Car Tests',
);

$this->menu=array(
	array('label'=>'Create TblCarTest', 'url'=>array('create')),
	array('label'=>'Manage TblCarTest', 'url'=>array('admin')),
);
?>

<h1>Tbl Car Tests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
