<?php
/* @var $this ApprovalrequestController */
/* @var $data Approvalrequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sarid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sarid), array('view', 'id'=>$data->sarid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contractnumber')); ?>:</b>
	<?php echo CHtml::encode($data->contractnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to')); ?>:</b>
	<?php echo CHtml::encode($data->to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sarnumber')); ?>:</b>
	<?php echo CHtml::encode($data->sarnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from')); ?>:</b>
	<?php echo CHtml::encode($data->from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approval')); ?>:</b>
	<?php echo CHtml::encode($data->approval); ?>
	<br />

	*/ ?>

</div>