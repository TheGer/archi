<?php
/* @var $this GeneralmattersController */
/* @var $model Generalmatters */

$this->breadcrumbs=array(
	'Generalmatters'=>array('index'),
	$model->name=>array('view','id'=>$model->generalmattersid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Generalmatters', 'url'=>array('index')),
	array('label'=>'Create Generalmatters', 'url'=>array('create')),
	array('label'=>'View Generalmatters', 'url'=>array('view', 'id'=>$model->generalmattersid)),
	array('label'=>'Manage Generalmatters', 'url'=>array('admin')),
);
?>

<h1>Update Generalmatters <?php echo $model->generalmattersid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>