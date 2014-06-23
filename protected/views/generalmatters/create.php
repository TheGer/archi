<?php
/* @var $this GeneralmattersController */
/* @var $model Generalmatters */

$this->breadcrumbs=array(
	'Generalmatters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Generalmatters', 'url'=>array('index')),
	array('label'=>'Manage Generalmatters', 'url'=>array('admin')),
);
?>

<h1>Create Generalmatters</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>