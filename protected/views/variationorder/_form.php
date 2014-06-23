<?php
/* @var $this VariationorderController */
/* @var $model Variationorder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'variationorder-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'variationorderid'); ?>
		<?php echo $form->textField($model,'variationorderid'); ?>
		<?php echo $form->error($model,'variationorderid'); ?>
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
		<?php echo $form->labelEx($model,'variationdetails'); ?>
		<?php echo $form->textArea($model,'variationdetails',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'variationdetails'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'variationreason'); ?>
		<?php echo $form->textArea($model,'variationreason',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'variationreason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costbreakdown'); ?>
		<?php echo $form->textArea($model,'costbreakdown',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'costbreakdown'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'effectsonduration'); ?>
		<?php echo $form->textArea($model,'effectsonduration',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'effectsonduration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requestedbyuomdate'); ?>
		<?php echo $form->textField($model,'requestedbyuomdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'requestedbyuomdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approveddate'); ?>
		<?php echo $form->textField($model,'approveddate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'approveddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approvedconsultantdate'); ?>
		<?php echo $form->textField($model,'approvedconsultantdate',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'approvedconsultantdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->