<?php
/* @var $this TblCarTestController */
/* @var $model TblCarTest */

$this->breadcrumbs=array(
	'Tbl Car Tests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblCarTest', 'url'=>array('index')),
	array('label'=>'Manage TblCarTest', 'url'=>array('admin')),
);
?>

<h1>Create TblCarTest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>