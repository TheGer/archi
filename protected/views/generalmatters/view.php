<?php
/* @var $this GeneralmattersController */
/* @var $model Generalmatters */

$this->breadcrumbs=array(
	'Generalmatters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Generalmatters', 'url'=>array('index')),
	array('label'=>'Create Generalmatters', 'url'=>array('create')),
	array('label'=>'Update Generalmatters', 'url'=>array('update', 'id'=>$model->generalmattersid)),
	array('label'=>'Delete Generalmatters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->generalmattersid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Generalmatters', 'url'=>array('admin')),
);
?>

<h1>View Generalmatters #<?php echo $model->generalmattersid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'generalmattersid',
		'meetingid',
		'name',
		'ref',
		'notes',
		'milestonedate',
		'milestonedescription',
		'generalmatterscol',
	),
)); ?>
