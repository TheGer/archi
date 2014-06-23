<?php
/* @var $this VariationorderController */
/* @var $data Variationorder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('variationorderid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->variationorderid), array('view', 'id'=>$data->variationorderid)); ?>
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
	<b><?php echo CHtml::encode($data->getAttributeLabel('variationdetails')); ?>:</b>
	<?php echo CHtml::encode($data->variationdetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variationreason')); ?>:</b>
	<?php echo CHtml::encode($data->variationreason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costbreakdown')); ?>:</b>
	<?php echo CHtml::encode($data->costbreakdown); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effectsonduration')); ?>:</b>
	<?php echo CHtml::encode($data->effectsonduration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requestedbyuomdate')); ?>:</b>
	<?php echo CHtml::encode($data->requestedbyuomdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approveddate')); ?>:</b>
	<?php echo CHtml::encode($data->approveddate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approvedconsultantdate')); ?>:</b>
	<?php echo CHtml::encode($data->approvedconsultantdate); ?>
	<br />

	*/ ?>

</div>