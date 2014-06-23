<?php
/* @var $this MinutesofmeetingController */
/* @var $model Minutesofmeeting */

$this->breadcrumbs=array(
	'Minutesofmeetings'=>array('index'),
	$model->minutesofmeetingid=>array('view','id'=>$model->minutesofmeetingid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Minutesofmeeting', 'url'=>array('index')),
	array('label'=>'Create Minutesofmeeting', 'url'=>array('create')),
	array('label'=>'View Minutesofmeeting', 'url'=>array('view', 'id'=>$model->minutesofmeetingid)),
	array('label'=>'Manage Minutesofmeeting', 'url'=>array('admin')),
);
?>

<h1>Update Minutesofmeeting <?php echo $model->minutesofmeetingid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>