<?php
/* @var $this MinutesofmeetingController */
/* @var $model Minutesofmeeting */

$this->breadcrumbs=array(
	'Minutesofmeetings'=>array('index'),
	$model->minutesofmeetingid,
);

$this->menu=array(
	array('label'=>'List Minutesofmeeting', 'url'=>array('index')),
	array('label'=>'Create Minutesofmeeting', 'url'=>array('create')),
	array('label'=>'Update Minutesofmeeting', 'url'=>array('update', 'id'=>$model->minutesofmeetingid)),
	array('label'=>'Delete Minutesofmeeting', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->minutesofmeetingid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Minutesofmeeting', 'url'=>array('admin')),
);
?>

<h1>View Minutesofmeeting #<?php echo $model->minutesofmeetingid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'minutesofmeetingid',
		'projectid',
		'time',
		'place',
		'typeofmeeting',
		'meetingnumber',
		'date',
		'nextmeetingdate',
		'nextmeetingtime',
		'nextmeetinglocation',
		'sectionbcontractnumber',
		'sectionbtitle',
	),
)); ?>
