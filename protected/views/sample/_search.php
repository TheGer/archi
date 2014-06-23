<?php
/* @var $this SampleController */
/* @var $model Sample */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sampleid'); ?>
		<?php echo $form->textField($model,'sampleid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sarid'); ?>
		<?php echo $form->textField($model,'sarid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drawingnumber'); ?>
		<?php echo $form->textField($model,'drawingnumber',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'specificationsection'); ?>
		<?php echo $form->textArea($model,'specificationsection',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'certificate'); ?>
		<?php echo $form->textArea($model,'certificate',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'specifications'); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sample'); ?>
		<?php echo $form->textField($model,'sample',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->