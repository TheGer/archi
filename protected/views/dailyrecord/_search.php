<?php
/* @var $this DailyrecordController */
/* @var $model Dailyrecord */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dailyrecordid'); ?>
		<?php echo $form->textField($model,'dailyrecordid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wind'); ?>
		<?php echo $form->textField($model,'wind',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maxtemp'); ?>
		<?php echo $form->textField($model,'maxtemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'relativehumidity'); ?>
		<?php echo $form->textField($model,'relativehumidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supervisors'); ?>
		<?php echo $form->textField($model,'supervisors'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tradesmen'); ?>
		<?php echo $form->textField($model,'tradesmen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'labour'); ?>
		<?php echo $form->textField($model,'labour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'builder'); ?>
		<?php echo $form->textField($model,'builder'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipment'); ?>
		<?php echo $form->textArea($model,'equipment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'works'); ?>
		<?php echo $form->textArea($model,'works',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deliveries'); ?>
		<?php echo $form->textArea($model,'deliveries',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phonecalls'); ?>
		<?php echo $form->textArea($model,'phonecalls',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitors'); ?>
		<?php echo $form->textArea($model,'visitors',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nonconformance'); ?>
		<?php echo $form->textArea($model,'nonconformance',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'signed'); ?>
		<?php echo $form->textField($model,'signed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->