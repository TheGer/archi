<?php
/* @var $this RfiController */
/* @var $model Rfi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rfiid'); ?>
		<?php echo $form->textField($model,'rfiid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to'); ?>
		<?php echo $form->textField($model,'to',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'issue'); ?>
		<?php echo $form->textArea($model,'issue',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datesubmitted'); ?>
		<?php echo $form->textField($model,'datesubmitted',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datereceived'); ?>
		<?php echo $form->textField($model,'datereceived',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->