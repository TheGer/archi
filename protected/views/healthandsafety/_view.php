<?php
/* @var $this HealthandsafetyController */
/* @var $data Healthandsafety */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('healthandsafetyid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->healthandsafetyid), array('view', 'id'=>$data->healthandsafetyid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actionby')); ?>:</b>
	<?php echo CHtml::encode($data->actionby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingid')); ?>:</b>
	<?php echo CHtml::encode($data->meetingid); ?>
	<br />


</div>