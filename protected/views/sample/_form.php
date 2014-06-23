<?php
/* @var $this SampleController */
/* @var $model Sample */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sample-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sampleid'); ?>
		<?php echo $form->textField($model,'sampleid'); ?>
		<?php echo $form->error($model,'sampleid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sarid'); ?>
		<?php echo $form->textField($model,'sarid'); ?>
		<?php echo $form->error($model,'sarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drawingnumber'); ?>
		<?php echo $form->textField($model,'drawingnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'drawingnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'specificationsection'); ?>
		<?php echo $form->textArea($model,'specificationsection',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specificationsection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificate'); ?>
		<?php echo $form->textArea($model,'certificate',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'certificate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'specifications'); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specifications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sample'); ?>
		<?php echo $form->textField($model,'sample',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sample'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->