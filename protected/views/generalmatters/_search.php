<?php
/* @var $this GeneralmattersController */
/* @var $model Generalmatters */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'generalmattersid'); ?>
		<?php echo $form->textField($model,'generalmattersid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meetingid'); ?>
		<?php echo $form->textField($model,'meetingid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref'); ?>
		<?php echo $form->textField($model,'ref',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milestonedate'); ?>
		<?php echo $form->textField($model,'milestonedate',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'milestonedescription'); ?>
		<?php echo $form->textField($model,'milestonedescription',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'generalmatterscol'); ?>
		<?php echo $form->textField($model,'generalmatterscol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->