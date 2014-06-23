<?php
/* @var $this VariationattachmentController */
/* @var $model Variationattachment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'variationattachmentid'); ?>
		<?php echo $form->textField($model,'variationattachmentid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'variationorderid'); ?>
		<?php echo $form->textField($model,'variationorderid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attachmentpath'); ?>
		<?php echo $form->textField($model,'attachmentpath',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attachmentdescription'); ?>
		<?php echo $form->textArea($model,'attachmentdescription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->