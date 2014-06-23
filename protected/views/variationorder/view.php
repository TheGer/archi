<?php
/* @var $this VariationorderController */
/* @var $model Variationorder */

$this->breadcrumbs=array(
	'Variationorders'=>array('index'),
	$model->variationorderid,
);

$this->menu=array(
	array('label'=>'List Variationorder', 'url'=>array('index')),
	array('label'=>'Create Variationorder', 'url'=>array('create')),
	array('label'=>'Update Variationorder', 'url'=>array('update', 'id'=>$model->variationorderid)),
	array('label'=>'Delete Variationorder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->variationorderid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Variationorder', 'url'=>array('admin')),
);
?>

<h1>View Variationorder #<?php echo $model->variationorderid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'variationorderid',
		'projectid',
		'contractnumber',
		'to',
		'from',
		'referencenumber',
		'date',
		'variationdetails',
		'variationreason',
		'costbreakdown',
		'effectsonduration',
		'requestedbyuomdate',
		'approveddate',
		'approvedconsultantdate',
	),
)); ?>
