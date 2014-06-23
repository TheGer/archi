<?php
/* @var $this AttendanceController */
/* @var $data Attendance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attendanceid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attendanceid), array('view', 'id'=>$data->attendanceid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibility')); ?>:</b>
	<?php echo CHtml::encode($data->responsibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acronym')); ?>:</b>
	<?php echo CHtml::encode($data->acronym); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('presentabsent')); ?>:</b>
	<?php echo CHtml::encode($data->presentabsent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingid')); ?>:</b>
	<?php echo CHtml::encode($data->meetingid); ?>
	<br />

	*/ ?>

</div>