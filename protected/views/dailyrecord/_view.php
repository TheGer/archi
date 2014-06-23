<?php
/* @var $this DailyrecordController */
/* @var $data Dailyrecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dailyrecordid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dailyrecordid), array('view', 'id'=>$data->dailyrecordid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wind')); ?>:</b>
	<?php echo CHtml::encode($data->wind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxtemp')); ?>:</b>
	<?php echo CHtml::encode($data->maxtemp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relativehumidity')); ?>:</b>
	<?php echo CHtml::encode($data->relativehumidity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supervisors')); ?>:</b>
	<?php echo CHtml::encode($data->supervisors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tradesmen')); ?>:</b>
	<?php echo CHtml::encode($data->tradesmen); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('labour')); ?>:</b>
	<?php echo CHtml::encode($data->labour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('builder')); ?>:</b>
	<?php echo CHtml::encode($data->builder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment')); ?>:</b>
	<?php echo CHtml::encode($data->equipment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('works')); ?>:</b>
	<?php echo CHtml::encode($data->works); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliveries')); ?>:</b>
	<?php echo CHtml::encode($data->deliveries); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phonecalls')); ?>:</b>
	<?php echo CHtml::encode($data->phonecalls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitors')); ?>:</b>
	<?php echo CHtml::encode($data->visitors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nonconformance')); ?>:</b>
	<?php echo CHtml::encode($data->nonconformance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signed')); ?>:</b>
	<?php echo CHtml::encode($data->signed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	*/ ?>

</div>