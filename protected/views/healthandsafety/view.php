<?php
/* @var $this HealthandsafetyController */
/* @var $model Healthandsafety */

$this->breadcrumbs=array(
	'Healthandsafeties'=>array('index'),
	$model->healthandsafetyid,
);

$this->menu=array(
	array('label'=>'List Healthandsafety', 'url'=>array('index')),
	array('label'=>'Create Healthandsafety', 'url'=>array('create')),
	array('label'=>'Update Healthandsafety', 'url'=>array('update', 'id'=>$model->healthandsafetyid)),
	array('label'=>'Delete Healthandsafety', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->healthandsafetyid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Healthandsafety', 'url'=>array('admin')),
);
?>

<h1>View Healthandsafety #<?php echo $model->healthandsafetyid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'healthandsafetyid',
		'note',
		'actionby',
		'duedate',
		'meetingid',
	),
)); ?>
