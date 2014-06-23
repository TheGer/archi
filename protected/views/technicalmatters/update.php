<?php
/* @var $this TechnicalmattersController */
/* @var $model Technicalmatters */

$this->breadcrumbs=array(
	'Technicalmatters'=>array('index'),
	$model->technicalmattersid=>array('view','id'=>$model->technicalmattersid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Technicalmatters', 'url'=>array('index')),
	array('label'=>'Create Technicalmatters', 'url'=>array('create')),
	array('label'=>'View Technicalmatters', 'url'=>array('view', 'id'=>$model->technicalmattersid)),
	array('label'=>'Manage Technicalmatters', 'url'=>array('admin')),
);
?>

<h1>Update Technicalmatters <?php echo $model->technicalmattersid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>