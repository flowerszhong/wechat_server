<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'vehicle-form',
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
<?php echo $form->labelEx($model, 'hphm');?>
		<?php echo $form->textArea($model, 'hphm', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'hphm');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'hpzl');?>
		<?php echo $form->textArea($model, 'hpzl', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'hpzl');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'cllx');?>
		<?php echo $form->textArea($model, 'cllx', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'cllx');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'ccdjrq');?>
		<?php echo $form->textArea($model, 'ccdjrq', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'ccdjrq');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'rlzl');?>
		<?php echo $form->textArea($model, 'rlzl', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'rlzl');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'yxgz');?>
		<?php echo $form->textArea($model, 'yxgz', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'yxgz');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'hbdbqk');?>
		<?php echo $form->textArea($model, 'hbdbqk', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'hbdbqk');?>
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