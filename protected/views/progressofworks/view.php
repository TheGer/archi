<?php
/* @var $this ProgressofworksController */
/* @var $model Progressofworks */

$this->breadcrumbs=array(
	'Progressofworks'=>array('index'),
	$model->progressofworkid,
);

$this->menu=array(
	array('label'=>'List Progressofworks', 'url'=>array('index')),
	array('label'=>'Create Progressofworks', 'url'=>array('create')),
	array('label'=>'Update Progressofworks', 'url'=>array('update', 'id'=>$model->progressofworkid)),
	array('label'=>'Delete Progressofworks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->progressofworkid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Progressofworks', 'url'=>array('admin')),
);
?>

<h1>View Progressofworks #<?php echo $model->progressofworkid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'progressofworkid',
		'note',
		'actionby',
		'duedate',
		'meetingid',
	),
)); ?>
