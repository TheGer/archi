<?php
/* @var $this MinutesofmeetingController */
/* @var $model Minutesofmeeting */

$this->breadcrumbs=array(
	'Minutesofmeetings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Minutesofmeeting', 'url'=>array('index')),
	array('label'=>'Manage Minutesofmeeting', 'url'=>array('admin')),
);
?>

<h1>Create Minutesofmeeting</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>