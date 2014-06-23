<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->projectid), array('view', 'id'=>$data->projectid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectname')); ?>:</b>
	<?php echo CHtml::encode($data->projectname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />


</div>