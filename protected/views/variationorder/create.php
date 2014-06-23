<?php
/* @var $this VariationorderController */
/* @var $model Variationorder */

$this->breadcrumbs=array(
	'Variationorders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Variationorder', 'url'=>array('index')),
	array('label'=>'Manage Variationorder', 'url'=>array('admin')),
);
?>

<h1>Create Variationorder</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>