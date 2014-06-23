<?php
/* @var $this HealthandsafetyController */
/* @var $model Healthandsafety */

$this->breadcrumbs=array(
	'Healthandsafeties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Healthandsafety', 'url'=>array('index')),
	array('label'=>'Manage Healthandsafety', 'url'=>array('admin')),
);
?>

<h1>Create Healthandsafety</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>