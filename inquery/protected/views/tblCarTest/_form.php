<?php
/* @var $this TblCarTestController */
/* @var $model TblCarTest */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'tbl-car-test-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	));?>
<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model);?>
<div class="row">
<?php echo $form->labelEx($model, 'xh');?>
		<?php echo $form->textArea($model, 'xh', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'xh');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'hphm');?>
		<?php echo $form->textArea($model, 'hphm', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'hphm');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'cllx');?>
		<?php echo $form->textArea($model, 'cllx', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'cllx');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'rlzl');?>
		<?php echo $form->textArea($model, 'rlzl', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'rlzl');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'ccdjrq');?>
		<?php echo $form->textArea($model, 'ccdjrq', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'ccdjrq');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'jcrq');?>
		<?php echo $form->textArea($model, 'jcrq', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'jcrq');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'jcjg');?>
		<?php echo $form->textArea($model, 'jcjg', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'jcjg');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'jcff');?>
		<?php echo $form->textArea($model, 'jcff', array('rows' => 6, 'cols' => 50));?>
		<?php echo $form->error($model, 'jcff');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'jccs');?>
		<?php echo $form->textField($model, 'jccs');?>
		<?php echo $form->error($model, 'jccs');?>
</div>

	<div class="row">
<?php echo $form->labelEx($model, 'jc_result');?>
		<?php echo $form->textField($model, 'jc_result');?>
		<?php echo $form->error($model, 'jc_result');?>
</div>

	<div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');?>
</div>


<?php $this->endWidget();?>

</div><!-- form -->