<?php
/* @var $this ProgressofworksController */
/* @var $data Progressofworks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('progressofworkid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->progressofworkid), array('view', 'id'=>$data->progressofworkid)); ?>
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