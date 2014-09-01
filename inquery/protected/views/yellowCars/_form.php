<?php
/* @var $this YellowCarsController */
/* @var $model YellowCars */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'yellow-cars-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	));?>
<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model);?>
<div class="row">
<?php echo $form->labelEx($model, 'FZJG');?>
		<?php echo $form->textArea($model, 'FZJG', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'FZJG');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'car_id');?>
		<?php echo $form->textArea($model, 'car_id', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'car_id');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'plate_type');?>
		<?php echo $form->textArea($model, 'plate_type', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'plate_type');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'car_type');?>
		<?php echo $form->textArea($model, 'car_type', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'car_type');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'use_type');?>
		<?php echo $form->textArea($model, 'use_type', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'use_type');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'reg_date');?>
		<?php echo $form->textArea($model, 'reg_date', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'reg_date');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'oil');?>
		<?php echo $form->textArea($model, 'oil', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'oil');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'valid_expire_date');?>
		<?php echo $form->textArea($model, 'valid_expire_date', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'valid_expire_date');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'Manufacture_date');?>
		<?php echo $form->textArea($model, 'Manufacture_date', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'Manufacture_date');?>
</div>

	<div class="row">
<?php if (CCaptcha::checkRequirements()):?>
<div class="row">

		  		        <div>
<?php $this->widget('CCaptcha',
	array(
		'showRefreshButton' => true,
		'buttonLabel'       => '刷新验证码',
		'clickableImage'    => true,
		'imageOptions'      => array('alt' => '点击换图', 'title' => '点击换图', 'style' => 'cursor:pointer'))
);
?>
<br>
<?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control'));?>
</div>
<?php echo $form->error($model, 'verifyCode');?>
</div>
<?php endif;?>
</div>

	<div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');?>
</div>

<?php $this->endWidget();?>

</div><!-- form -->