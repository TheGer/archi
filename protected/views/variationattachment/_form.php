<?php
/* @var $this VariationattachmentController */
/* @var $model Variationattachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'variationattachment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'variationattachmentid'); ?>
		<?php echo $form->textField($model,'variationattachmentid'); ?>
		<?php echo $form->error($model,'variationattachmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'variationorderid'); ?>
		<?php echo $form->textField($model,'variationorderid'); ?>
		<?php echo $form->error($model,'variationorderid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachmentpath'); ?>
		<?php echo $form->textField($model,'attachmentpath',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'attachmentpath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachmentdescription'); ?>
		<?php echo $form->textArea($model,'attachmentdescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'attachmentdescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->