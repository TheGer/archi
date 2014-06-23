<?php
/* @var $this VariationorderController */
/* @var $model Variationorder */

$this->breadcrumbs=array(
	'Variationorders'=>array('index'),
	$model->variationorderid=>array('view','id'=>$model->variationorderid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Variationorder', 'url'=>array('index')),
	array('label'=>'Create Variationorder', 'url'=>array('create')),
	array('label'=>'View Variationorder', 'url'=>array('view', 'id'=>$model->variationorderid)),
	array('label'=>'Manage Variationorder', 'url'=>array('admin')),
);
?>

<h1>Update Variationorder <?php echo $model->variationorderid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>