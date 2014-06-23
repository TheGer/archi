<?php
/* @var $this SampleController */
/* @var $model Sample */

$this->breadcrumbs=array(
	'Samples'=>array('index'),
	$model->sampleid,
);

$this->menu=array(
	array('label'=>'List Sample', 'url'=>array('index')),
	array('label'=>'Create Sample', 'url'=>array('create')),
	array('label'=>'Update Sample', 'url'=>array('update', 'id'=>$model->sampleid)),
	array('label'=>'Delete Sample', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sampleid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sample', 'url'=>array('admin')),
);
?>

<h1>View Sample #<?php echo $model->sampleid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sampleid',
		'sarid',
		'drawingnumber',
		'specificationsection',
		'certificate',
		'specifications',
		'sample',
	),
)); ?>
