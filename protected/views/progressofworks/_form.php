<?php
/* @var $this ProgressofworksController */
/* @var $model Progressofworks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'progressofworks-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'progressofworkid'); ?>
		<?php echo $form->textField($model,'progressofworkid'); ?>
		<?php echo $form->error($model,'progressofworkid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actionby'); ?>
		<?php echo $form->textField($model,'actionby',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'actionby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meetingid'); ?>
		<?php echo $form->textField($model,'meetingid'); ?>
		<?php echo $form->error($model,'meetingid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->