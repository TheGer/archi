<?php
/* @var $this NoticetocheckController */
/* @var $data Noticetocheck */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noticetocheckid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noticetocheckid), array('view', 'id'=>$data->noticetocheckid)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('from')); ?>:</b>
	<?php echo CHtml::encode($data->from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencenumber')); ?>:</b>
	<?php echo CHtml::encode($data->referencenumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concealmentdate')); ?>:</b>
	<?php echo CHtml::encode($data->concealmentdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('concealmenttime')); ?>:</b>
	<?php echo CHtml::encode($data->concealmenttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inspectedbyname')); ?>:</b>
	<?php echo CHtml::encode($data->inspectedbyname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inspectedbyposition')); ?>:</b>
	<?php echo CHtml::encode($data->inspectedbyposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inspectedbydate')); ?>:</b>
	<?php echo CHtml::encode($data->inspectedbydate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultantname')); ?>:</b>
	<?php echo CHtml::encode($data->consultantname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultantposition')); ?>:</b>
	<?php echo CHtml::encode($data->consultantposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultantdate')); ?>:</b>
	<?php echo CHtml::encode($data->consultantdate); ?>
	<br />

	*/ ?>

</div>