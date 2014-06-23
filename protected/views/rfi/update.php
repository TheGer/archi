<?php
/* @var $this RfiController */
/* @var $model Rfi */

$this->breadcrumbs=array(
	'Rfis'=>array('index'),
	$model->rfiid=>array('view','id'=>$model->rfiid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rfi', 'url'=>array('index')),
	array('label'=>'Create Rfi', 'url'=>array('create')),
	array('label'=>'View Rfi', 'url'=>array('view', 'id'=>$model->rfiid)),
	array('label'=>'Manage Rfi', 'url'=>array('admin')),
);
?>

<h1>Update Rfi <?php echo $model->rfiid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>