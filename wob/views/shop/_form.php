<?php
/* @var $this ShopController */
/* @var $model WobShops */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shops-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email_admin'); ?>
		<?php echo $form->textField($model,'email_admin',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'email_admin'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password_api'); ?>
		<?php echo $form->textField($model,'password_api',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password_api'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url_result_api'); ?>
		<?php echo $form->textField($model,'url_result_api',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'url_result_api'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_currency_2'); ?>
		<?php echo $form->dropDownList(
			$model,
			'id_currency_2',
			CHtml::listData(WobCurrency::model()->findAll(), 'id', 'name'),
			array('class'=>'form-control')
		); ?>
		<?php echo $form->error($model,'id_currency_2'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_currency_1'); ?>
		<?php echo CHtml::dropDownList(
			'WobShops[id_currency_1][]',
			$model->getCurrencyPay(),
			CHtml::listData(WobCurrency::model()->pay()->findAll(), 'id', 'name'),
			array('empty'=>WobModule::t('main', 'Select method'), 'multiple' => 'multiple', 'class'=>'form-control')
		); ?>
		<?php echo $form->error($model,'id_currency_1'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'is_test_mode'); ?><br />
		<?php echo $form->radioButtonList($model,'is_test_mode',array('1'=>'Рабочий','0'=>'Тестовый')); ?>
		<?php echo $form->error($model,'is_test_mode'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'is_commission_shop'); ?><br />
		<?php echo $form->radioButtonList($model,'is_commission_shop',array('0'=>'Комиссия добавляется к стоимости счета','1'=>'Комиссия вычиталась из получаемых мной денег')); ?>
		<?php echo $form->error($model,'is_commission_shop'); ?>
	</div>
	
	<?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? WobModule::t('main', 'Create') : WobModule::t('main', 'Save'), array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->