<?php
/* @var $this MinutesofmeetingController */
/* @var $data Minutesofmeeting */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('minutesofmeetingid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->minutesofmeetingid), array('view', 'id'=>$data->minutesofmeetingid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typeofmeeting')); ?>:</b>
	<?php echo CHtml::encode($data->typeofmeeting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingnumber')); ?>:</b>
	<?php echo CHtml::encode($data->meetingnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nextmeetingdate')); ?>:</b>
	<?php echo CHtml::encode($data->nextmeetingdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nextmeetingtime')); ?>:</b>
	<?php echo CHtml::encode($data->nextmeetingtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nextmeetinglocation')); ?>:</b>
	<?php echo CHtml::encode($data->nextmeetinglocation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionbcontractnumber')); ?>:</b>
	<?php echo CHtml::encode($data->sectionbcontractnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectionbtitle')); ?>:</b>
	<?php echo CHtml::encode($data->sectionbtitle); ?>
	<br />

	*/ ?>

</div>