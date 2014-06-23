<?php
/* @var $this GeneralmattersController */
/* @var $model Generalmatters */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'generalmatters-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'generalmattersid'); ?>
		<?php echo $form->textField($model,'generalmattersid'); ?>
		<?php echo $form->error($model,'generalmattersid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meetingid'); ?>
		<?php echo $form->textField($model,'meetingid'); ?>
		<?php echo $form->error($model,'meetingid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref'); ?>
		<?php echo $form->textField($model,'ref',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ref'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'milestonedate'); ?>
		<?php echo $form->textField($model,'milestonedate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'milestonedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'milestonedescription'); ?>
		<?php echo $form->textField($model,'milestonedescription',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'milestonedescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generalmatterscol'); ?>
		<?php echo $form->textField($model,'generalmatterscol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'generalmatterscol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->