<?php
/* @var $this VariationattachmentController */
/* @var $data Variationattachment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('variationattachmentid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->variationattachmentid), array('view', 'id'=>$data->variationattachmentid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variationorderid')); ?>:</b>
	<?php echo CHtml::encode($data->variationorderid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachmentpath')); ?>:</b>
	<?php echo CHtml::encode($data->attachmentpath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachmentdescription')); ?>:</b>
	<?php echo CHtml::encode($data->attachmentdescription); ?>
	<br />


</div>