<?php
/* @var $this YellowCarsController */
/* @var $model YellowCars */

$this->breadcrumbs=array(
	'Yellow Cars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YellowCars', 'url'=>array('index')),
	array('label'=>'Create YellowCars', 'url'=>array('create')),
	array('label'=>'View YellowCars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YellowCars', 'url'=>array('admin')),
);
?>

<h1>Update YellowCars <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>