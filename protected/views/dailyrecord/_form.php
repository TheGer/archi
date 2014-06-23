<?php
/* @var $this DailyrecordController */
/* @var $model Dailyrecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dailyrecord-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'wind'); ?>
		<?php echo $form->textField($model,'wind',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'wind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maxtemp'); ?>
		<?php echo $form->textField($model,'maxtemp'); ?>
		<?php echo $form->error($model,'maxtemp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relativehumidity'); ?>
		<?php echo $form->textField($model,'relativehumidity'); ?>
		<?php echo $form->error($model,'relativehumidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supervisors'); ?>
		<?php echo $form->textField($model,'supervisors'); ?>
		<?php echo $form->error($model,'supervisors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tradesmen'); ?>
		<?php echo $form->textField($model,'tradesmen'); ?>
		<?php echo $form->error($model,'tradesmen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'labour'); ?>
		<?php echo $form->textField($model,'labour'); ?>
		<?php echo $form->error($model,'labour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'builder'); ?>
		<?php echo $form->textField($model,'builder'); ?>
		<?php echo $form->error($model,'builder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipment'); ?>
		<?php echo $form->textArea($model,'equipment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'works'); ?>
		<?php echo $form->textArea($model,'works',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'works'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deliveries'); ?>
		<?php echo $form->textArea($model,'deliveries',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deliveries'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonecalls'); ?>
		<?php echo $form->textArea($model,'phonecalls',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'phonecalls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitors'); ?>
		<?php echo $form->textArea($model,'visitors',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'visitors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nonconformance'); ?>
		<?php echo $form->textArea($model,'nonconformance',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'nonconformance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'signed'); ?>
		<?php echo $form->textField($model,'signed'); ?>
		<?php echo $form->error($model,'signed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid'); ?>
		<?php echo $form->error($model,'projectid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->