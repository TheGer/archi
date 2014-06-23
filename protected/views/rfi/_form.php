<?php
/* @var $this RfiController */
/* @var $model Rfi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rfi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rfiid'); ?>
		<?php echo $form->textField($model,'rfiid'); ?>
		<?php echo $form->error($model,'rfiid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to'); ?>
		<?php echo $form->textField($model,'to',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issue'); ?>
		<?php echo $form->textArea($model,'issue',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'issue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datesubmitted'); ?>
		<?php echo $form->textField($model,'datesubmitted',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'datesubmitted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datereceived'); ?>
		<?php echo $form->textField($model,'datereceived',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'datereceived'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->