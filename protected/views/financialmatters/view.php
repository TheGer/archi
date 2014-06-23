<?php
/* @var $this FinancialmattersController */
/* @var $model Financialmatters */

$this->breadcrumbs=array(
	'Financialmatters'=>array('index'),
	$model->financialmattersid,
);

$this->menu=array(
	array('label'=>'List Financialmatters', 'url'=>array('index')),
	array('label'=>'Create Financialmatters', 'url'=>array('create')),
	array('label'=>'Update Financialmatters', 'url'=>array('update', 'id'=>$model->financialmattersid)),
	array('label'=>'Delete Financialmatters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->financialmattersid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Financialmatters', 'url'=>array('admin')),
);
?>

<h1>View Financialmatters #<?php echo $model->financialmattersid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'financialmattersid',
		'meetingid',
		'note',
		'actionby',
		'duedate',
	),
)); ?>
