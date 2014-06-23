<?php
/* @var $this MinutesofmeetingController */
/* @var $model Minutesofmeeting */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'minutesofmeeting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'minutesofmeetingid'); ?>
		<?php echo $form->textField($model,'minutesofmeetingid'); ?>
		<?php echo $form->error($model,'minutesofmeetingid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typeofmeeting'); ?>
		<?php echo $form->textField($model,'typeofmeeting',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'typeofmeeting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meetingnumber'); ?>
		<?php echo $form->textField($model,'meetingnumber'); ?>
		<?php echo $form->error($model,'meetingnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nextmeetingdate'); ?>
		<?php echo $form->textField($model,'nextmeetingdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nextmeetingdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nextmeetingtime'); ?>
		<?php echo $form->textField($model,'nextmeetingtime',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nextmeetingtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nextmeetinglocation'); ?>
		<?php echo $form->textField($model,'nextmeetinglocation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nextmeetinglocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionbcontractnumber'); ?>
		<?php echo $form->textField($model,'sectionbcontractnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sectionbcontractnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sectionbtitle'); ?>
		<?php echo $form->textField($model,'sectionbtitle',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sectionbtitle'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->