<?php
/* @var $this ApprovalrequestController */
/* @var $model Approvalrequest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sarid'); ?>
		<?php echo $form->textField($model,'sarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contractnumber'); ?>
		<?php echo $form->textField($model,'contractnumber',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to'); ?>
		<?php echo $form->textField($model,'to',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sarnumber'); ?>
		<?php echo $form->textField($model,'sarnumber',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from'); ?>
		<?php echo $form->textField($model,'from',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approval'); ?>
		<?php echo $form->textArea($model,'approval',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->