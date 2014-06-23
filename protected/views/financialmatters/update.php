<?php
/* @var $this FinancialmattersController */
/* @var $model Financialmatters */

$this->breadcrumbs=array(
	'Financialmatters'=>array('index'),
	$model->financialmattersid=>array('view','id'=>$model->financialmattersid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Financialmatters', 'url'=>array('index')),
	array('label'=>'Create Financialmatters', 'url'=>array('create')),
	array('label'=>'View Financialmatters', 'url'=>array('view', 'id'=>$model->financialmattersid)),
	array('label'=>'Manage Financialmatters', 'url'=>array('admin')),
);
?>

<h1>Update Financialmatters <?php echo $model->financialmattersid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>