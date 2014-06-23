<?php
/* @var $this DailyrecordController */
/* @var $model Dailyrecord */

$this->breadcrumbs=array(
	'Dailyrecords'=>array('index'),
	$model->dailyrecordid,
);

$this->menu=array(
	array('label'=>'List Dailyrecord', 'url'=>array('index')),
	array('label'=>'Create Dailyrecord', 'url'=>array('create')),
	array('label'=>'Update Dailyrecord', 'url'=>array('update', 'id'=>$model->dailyrecordid)),
	array('label'=>'Delete Dailyrecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dailyrecordid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dailyrecord', 'url'=>array('admin')),
);
?>

<h1>View Dailyrecord #<?php echo $model->dailyrecordid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dailyrecordid',
		'wind',
		'maxtemp',
		'relativehumidity',
		'date',
		'supervisors',
		'tradesmen',
		'labour',
		'builder',
		'equipment',
		'works',
		'remarks',
		'deliveries',
		'phonecalls',
		'visitors',
		'nonconformance',
		'approved',
		'signed',
		'projectid',
	),
)); ?>
