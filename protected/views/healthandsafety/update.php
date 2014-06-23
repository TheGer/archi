<?php
/* @var $this HealthandsafetyController */
/* @var $model Healthandsafety */

$this->breadcrumbs=array(
	'Healthandsafeties'=>array('index'),
	$model->healthandsafetyid=>array('view','id'=>$model->healthandsafetyid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Healthandsafety', 'url'=>array('index')),
	array('label'=>'Create Healthandsafety', 'url'=>array('create')),
	array('label'=>'View Healthandsafety', 'url'=>array('view', 'id'=>$model->healthandsafetyid)),
	array('label'=>'Manage Healthandsafety', 'url'=>array('admin')),
);
?>

<h1>Update Healthandsafety <?php echo $model->healthandsafetyid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>