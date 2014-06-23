<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'projectname'); ?>
		<?php echo $form->textField($model,'projectname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'projectname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startdate'); ?>
		<?php echo $form->textField($model,'startdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'startdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->