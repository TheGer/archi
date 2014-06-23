<?php
/* @var $this ApprovalrequestController */
/* @var $model Approvalrequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'approvalrequest-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sarid'); ?>
		<?php echo $form->textField($model,'sarid'); ?>
		<?php echo $form->error($model,'sarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contractnumber'); ?>
		<?php echo $form->textField($model,'contractnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contractnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to'); ?>
		<?php echo $form->textField($model,'to',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sarnumber'); ?>
		<?php echo $form->textField($model,'sarnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sarnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from'); ?>
		<?php echo $form->textField($model,'from',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approval'); ?>
		<?php echo $form->textArea($model,'approval',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'approval'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->