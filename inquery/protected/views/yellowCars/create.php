<?php
/* @var $this YellowCarsController */
/* @var $model YellowCars */

$this->breadcrumbs=array(
	'Yellow Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YellowCars', 'url'=>array('index')),
	array('label'=>'Manage YellowCars', 'url'=>array('admin')),
);
?>

<h1>Create YellowCars</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>