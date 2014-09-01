<?php
/* @var $this VehicleController */
/* @var $data Vehicle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FZJG')); ?>:</b>
	<?php echo CHtml::encode($data->FZJG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hphm')); ?>:</b>
	<?php echo CHtml::encode($data->hphm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hpzl')); ?>:</b>
	<?php echo CHtml::encode($data->hpzl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cllx')); ?>:</b>
	<?php echo CHtml::encode($data->cllx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ccdjrq')); ?>:</b>
	<?php echo CHtml::encode($data->ccdjrq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rlzl')); ?>:</b>
	<?php echo CHtml::encode($data->rlzl); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('yxgz')); ?>:</b>
	<?php echo CHtml::encode($data->yxgz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hbdbqk')); ?>:</b>
	<?php echo CHtml::encode($data->hbdbqk); ?>
	<br />

	*/ ?>

</div>