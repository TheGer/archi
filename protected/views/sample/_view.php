<?php
/* @var $this SampleController */
/* @var $data Sample */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sampleid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sampleid), array('view', 'id'=>$data->sampleid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sarid')); ?>:</b>
	<?php echo CHtml::encode($data->sarid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drawingnumber')); ?>:</b>
	<?php echo CHtml::encode($data->drawingnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specificationsection')); ?>:</b>
	<?php echo CHtml::encode($data->specificationsection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certificate')); ?>:</b>
	<?php echo CHtml::encode($data->certificate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specifications')); ?>:</b>
	<?php echo CHtml::encode($data->specifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sample')); ?>:</b>
	<?php echo CHtml::encode($data->sample); ?>
	<br />


</div>