<?php
/* @var $this SampleController */
/* @var $model Sample */

$this->breadcrumbs=array(
	'Samples'=>array('index'),
	$model->sampleid=>array('view','id'=>$model->sampleid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sample', 'url'=>array('index')),
	array('label'=>'Create Sample', 'url'=>array('create')),
	array('label'=>'View Sample', 'url'=>array('view', 'id'=>$model->sampleid)),
	array('label'=>'Manage Sample', 'url'=>array('admin')),
);
?>

<h1>Update Sample <?php echo $model->sampleid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>