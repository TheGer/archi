<?php
/* @var $this TechnicalmattersController */
/* @var $model Technicalmatters */

$this->breadcrumbs=array(
	'Technicalmatters'=>array('index'),
	$model->technicalmattersid,
);

$this->menu=array(
	array('label'=>'List Technicalmatters', 'url'=>array('index')),
	array('label'=>'Create Technicalmatters', 'url'=>array('create')),
	array('label'=>'Update Technicalmatters', 'url'=>array('update', 'id'=>$model->technicalmattersid)),
	array('label'=>'Delete Technicalmatters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->technicalmattersid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Technicalmatters', 'url'=>array('admin')),
);
?>

<h1>View Technicalmatters #<?php echo $model->technicalmattersid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'technicalmattersid',
		'meetingid',
		'note',
		'actionby',
		'duedate',
	),
)); ?>
