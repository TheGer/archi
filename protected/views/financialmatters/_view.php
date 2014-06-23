<?php
/* @var $this FinancialmattersController */
/* @var $data Financialmatters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('financialmattersid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->financialmattersid), array('view', 'id'=>$data->financialmattersid)); ?>
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