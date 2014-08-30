<?php
/* @var $this YellowCarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yellow Cars',
);

$this->menu=array(
	array('label'=>'Create YellowCars', 'url'=>array('create')),
	array('label'=>'Manage YellowCars', 'url'=>array('admin')),
);
?>

<h1>Yellow Cars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
