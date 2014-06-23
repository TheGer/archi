<?php
/* @var $this RfiController */
/* @var $data Rfi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfiid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rfiid), array('view', 'id'=>$data->rfiid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to')); ?>:</b>
	<?php echo CHtml::encode($data->to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue')); ?>:</b>
	<?php echo CHtml::encode($data->issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datesubmitted')); ?>:</b>
	<?php echo CHtml::encode($data->datesubmitted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datereceived')); ?>:</b>
	<?php echo CHtml::encode($data->datereceived); ?>
	<br />


</div>