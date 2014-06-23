<?php
/* @var $this ProgressofworksController */
/* @var $model Progressofworks */

$this->breadcrumbs=array(
	'Progressofworks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Progressofworks', 'url'=>array('index')),
	array('label'=>'Manage Progressofworks', 'url'=>array('admin')),
);
?>

<h1>Create Progressofworks</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>