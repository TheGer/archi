<?php
/* @var $this AttendanceController */
/* @var $model Attendance */

$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	$model->name=>array('view','id'=>$model->attendanceid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attendance', 'url'=>array('index')),
	array('label'=>'Create Attendance', 'url'=>array('create')),
	array('label'=>'View Attendance', 'url'=>array('view', 'id'=>$model->attendanceid)),
	array('label'=>'Manage Attendance', 'url'=>array('admin')),
);
?>

<h1>Update Attendance <?php echo $model->attendanceid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>