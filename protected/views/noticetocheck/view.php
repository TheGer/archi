<?php
/* @var $this NoticetocheckController */
/* @var $model Noticetocheck */

$this->breadcrumbs=array(
	'Noticetochecks'=>array('index'),
	$model->noticetocheckid,
);

$this->menu=array(
	array('label'=>'List Noticetocheck', 'url'=>array('index')),
	array('label'=>'Create Noticetocheck', 'url'=>array('create')),
	array('label'=>'Update Noticetocheck', 'url'=>array('update', 'id'=>$model->noticetocheckid)),
	array('label'=>'Delete Noticetocheck', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->noticetocheckid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticetocheck', 'url'=>array('admin')),
);
?>

<h1>View Noticetocheck #<?php echo $model->noticetocheckid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'noticetocheckid',
		'projectid',
		'contractnumber',
		'to',
		'from',
		'referencenumber',
		'date',
		'description',
		'concealmentdate',
		'concealmenttime',
		'comments',
		'inspectedbyname',
		'inspectedbyposition',
		'inspectedbydate',
		'consultantname',
		'consultantposition',
		'consultantdate',
	),
)); ?>
