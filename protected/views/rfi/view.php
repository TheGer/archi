<?php
/* @var $this RfiController */
/* @var $model Rfi */

$this->breadcrumbs=array(
	'Rfis'=>array('index'),
	$model->rfiid,
);

$this->menu=array(
	array('label'=>'List Rfi', 'url'=>array('index')),
	array('label'=>'Create Rfi', 'url'=>array('create')),
	array('label'=>'Update Rfi', 'url'=>array('update', 'id'=>$model->rfiid)),
	array('label'=>'Delete Rfi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rfiid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rfi', 'url'=>array('admin')),
);
?>

<h1>View Rfi #<?php echo $model->rfiid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rfiid',
		'projectid',
		'to',
		'issue',
		'datesubmitted',
		'datereceived',
	),
)); ?>
