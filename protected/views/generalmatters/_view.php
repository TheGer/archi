<?php
/* @var $this GeneralmattersController */
/* @var $data Generalmatters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('generalmattersid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->generalmattersid), array('view', 'id'=>$data->generalmattersid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingid')); ?>:</b>
	<?php echo CHtml::encode($data->meetingid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref')); ?>:</b>
	<?php echo CHtml::encode($data->ref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milestonedate')); ?>:</b>
	<?php echo CHtml::encode($data->milestonedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milestonedescription')); ?>:</b>
	<?php echo CHtml::encode($data->milestonedescription); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('generalmatterscol')); ?>:</b>
	<?php echo CHtml::encode($data->generalmatterscol); ?>
	<br />

	*/ ?>

</div>