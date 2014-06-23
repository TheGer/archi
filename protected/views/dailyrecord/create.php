<?php
/* @var $this DailyrecordController */
/* @var $model Dailyrecord */

$this->breadcrumbs=array(
	'Dailyrecords'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dailyrecord', 'url'=>array('index')),
	array('label'=>'Manage Dailyrecord', 'url'=>array('admin')),
);
?>

<h1>Create Dailyrecord</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>