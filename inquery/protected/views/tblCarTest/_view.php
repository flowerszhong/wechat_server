<?php
/* @var $this TblCarTestController */
/* @var $data TblCarTest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xh')); ?>:</b>
	<?php echo CHtml::encode($data->xh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hphm')); ?>:</b>
	<?php echo CHtml::encode($data->hphm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cllx')); ?>:</b>
	<?php echo CHtml::encode($data->cllx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rlzl')); ?>:</b>
	<?php echo CHtml::encode($data->rlzl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ccdjrq')); ?>:</b>
	<?php echo CHtml::encode($data->ccdjrq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jcrq')); ?>:</b>
	<?php echo CHtml::encode($data->jcrq); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jcjg')); ?>:</b>
	<?php echo CHtml::encode($data->jcjg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jcff')); ?>:</b>
	<?php echo CHtml::encode($data->jcff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jccs')); ?>:</b>
	<?php echo CHtml::encode($data->jccs); ?>
	<br />

	*/ ?>

</div>