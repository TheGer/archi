<?php
/* @var $this DailyrecordController */
/* @var $model Dailyrecord */

$this->breadcrumbs=array(
	'Dailyrecords'=>array('index'),
	$model->dailyrecordid=>array('view','id'=>$model->dailyrecordid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dailyrecord', 'url'=>array('index')),
	array('label'=>'Create Dailyrecord', 'url'=>array('create')),
	array('label'=>'View Dailyrecord', 'url'=>array('view', 'id'=>$model->dailyrecordid)),
	array('label'=>'Manage Dailyrecord', 'url'=>array('admin')),
);
?>

<h1>Update Dailyrecord <?php echo $model->dailyrecordid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>