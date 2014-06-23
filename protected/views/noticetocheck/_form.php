<?php
/* @var $this NoticetocheckController */
/* @var $model Noticetocheck */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticetocheck-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'noticetocheckid'); ?>
		<?php echo $form->textField($model,'noticetocheckid'); ?>
		<?php echo $form->error($model,'noticetocheckid'); ?>
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
		<?php echo $form->labelEx($model,'from'); ?>
		<?php echo $form->textField($model,'from',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencenumber'); ?>
		<?php echo $form->textField($model,'referencenumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'referencenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'concealmentdate'); ?>
		<?php echo $form->textField($model,'concealmentdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'concealmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'concealmenttime'); ?>
		<?php echo $form->textField($model,'concealmenttime',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'concealmenttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inspectedbyname'); ?>
		<?php echo $form->textField($model,'inspectedbyname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'inspectedbyname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inspectedbyposition'); ?>
		<?php echo $form->textField($model,'inspectedbyposition',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'inspectedbyposition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inspectedbydate'); ?>
		<?php echo $form->textField($model,'inspectedbydate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'inspectedbydate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consultantname'); ?>
		<?php echo $form->textField($model,'consultantname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'consultantname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consultantposition'); ?>
		<?php echo $form->textField($model,'consultantposition',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'consultantposition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consultantdate'); ?>
		<?php echo $form->textField($model,'consultantdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'consultantdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->