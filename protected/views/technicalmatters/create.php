<?php
/* @var $this TechnicalmattersController */
/* @var $model Technicalmatters */

$this->breadcrumbs=array(
	'Technicalmatters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Technicalmatters', 'url'=>array('index')),
	array('label'=>'Manage Technicalmatters', 'url'=>array('admin')),
);
?>

<h1>Create Technicalmatters</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>