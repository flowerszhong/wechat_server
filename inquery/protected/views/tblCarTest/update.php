<?php
/* @var $this TblCarTestController */
/* @var $model TblCarTest */

$this->breadcrumbs=array(
	'Tbl Car Tests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblCarTest', 'url'=>array('index')),
	array('label'=>'Create TblCarTest', 'url'=>array('create')),
	array('label'=>'View TblCarTest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblCarTest', 'url'=>array('admin')),
);
?>

<h1>Update TblCarTest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>