<?php
/* @var $this TechnicalmattersController */
/* @var $data Technicalmatters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('technicalmattersid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->technicalmattersid), array('view', 'id'=>$data->technicalmattersid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingid')); ?>:</b>
	<?php echo CHtml::encode($data->meetingid); ?>
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


</div>