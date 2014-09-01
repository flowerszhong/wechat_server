<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>
<div class="wide form custom_container">

<?php $form = $this->beginWidget('CActiveForm', array(
		'action'                 => Yii::app()->createUrl($this->route),
		'method'                 => 'get',
		'enableClientValidation' => true,
		'clientOptions'          => array(
			'validateOnSubmit' => true,
			// 'afterValidate' => "js: function(form, data, hasError) {
			//     console.log(data);
			//     return false;
			// }"
		),
		'htmlOptions' => array(
			'class' => 'form-inline',
			'role'  => 'form',
		),
	));?>
<button type="button" class="btn btn-primary btn-lg btn-block">&gt;
&gt;
机动车状态查询&lt;
&lt;
</button>

	 <form class="form-inline" role="form">
	  <table class='table-striped table-bordered query-table' style="width:100%;">
	  	<tr>
	  		<td style="width:30%;">
	  		车牌号
	  		<b style="color:red;">(*必填)</b>
	  		</td>
	  		<td>
		  		<div class="form-group">
		  			<select class="form-control">
		  				<option>粤</option>

		  			</select>
<?php echo $form->textField($model, 'hphm',
	array('placeholder' => '请输入车牌号',
		'class'            => "form-control"));?>
		  			<?php echo $form->error($model, 'hphm');?>
</div>
	  			(如:GYY376)
	  		</td>
	  	</tr>
	  		<tr>
	  		<td>
	  			号牌种类
	  		</td>
	  		<td>
<?php echo $form->textField($model, 'hpzl', array('placeholder' => '请输入号牌种类',
		'class'                                                       => "form-control"));?>
</td>

	  	</tr>

	  	</tr>
	  		<tr>
	  		<td>
	  			车辆类型
	  		</td>
	  		<td>
<?php echo $form->textField($model, 'cllx', array('placeholder' => '请输入车辆类型',
		'class'                                                       => "form-control"));?>
</td>

	  	</tr>
	  	<tr>
	  		<td>
	  		验证码
	  		</td>
	  		<td>
		  		<div class="form-group">


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
	  		</td>
  		</tr>
	  </table>
<?php echo CHtml::submitButton('查询', array('class' => 'btn btn-success btn-lg btn-block'));?>
</form>
</div>

<?php $this->endWidget();?>

</div><!-- search-form -->