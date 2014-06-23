<?php
/* @var $this ApprovalrequestController */
/* @var $model Approvalrequest */

$this->breadcrumbs=array(
	'Approvalrequests'=>array('index'),
	$model->sarid,
);

$this->menu=array(
	array('label'=>'List Approvalrequest', 'url'=>array('index')),
	array('label'=>'Create Approvalrequest', 'url'=>array('create')),
	array('label'=>'Update Approvalrequest', 'url'=>array('update', 'id'=>$model->sarid)),
	array('label'=>'Delete Approvalrequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sarid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Approvalrequest', 'url'=>array('admin')),
);
?>

<h1>View Approvalrequest #<?php echo $model->sarid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sarid',
		'projectid',
		'contractnumber',
		'to',
		'sarnumber',
		'from',
		'date',
		'comments',
		'approval',
	),
)); ?>
