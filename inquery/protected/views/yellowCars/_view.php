<?php
/* @var $this YellowCarsController */
/* @var $data YellowCars */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id'));?>:</b>
<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FZJG'));?>:</b>
<?php echo CHtml::encode($data->FZJG);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id'));?>:</b>
<?php echo CHtml::encode($data->car_id);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plate_type'));?>:</b>
<?php echo CHtml::encode($data->plate_type);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_type'));?>:</b>
<?php echo CHtml::encode($data->car_type);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use_type'));?>:</b>
<?php echo CHtml::encode($data->use_type);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_date'));?>:</b>
<?php echo CHtml::encode($data->reg_date);?>
<br />

<?php /*
<b><?php echo CHtml::encode($data->getAttributeLabel('oil')); ?>:</b>
<?php echo CHtml::encode($data->oil); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('valid_expire_date')); ?>:</b>
<?php echo CHtml::encode($data->valid_expire_date); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Manufacture_date')); ?>:</b>
<?php echo CHtml::encode($data->Manufacture_date); ?>
<br />

 */?>

</div>