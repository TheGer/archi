<?php
/* @var $this ProgressofworksController */
/* @var $model Progressofworks */

$this->breadcrumbs=array(
	'Progressofworks'=>array('index'),
	$model->progressofworkid=>array('view','id'=>$model->progressofworkid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Progressofworks', 'url'=>array('index')),
	array('label'=>'Create Progressofworks', 'url'=>array('create')),
	array('label'=>'View Progressofworks', 'url'=>array('view', 'id'=>$model->progressofworkid)),
	array('label'=>'Manage Progressofworks', 'url'=>array('admin')),
);
?>

<h1>Update Progressofworks <?php echo $model->progressofworkid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>