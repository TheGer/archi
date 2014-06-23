<?php
/* @var $this FinancialmattersController */
/* @var $model Financialmatters */

$this->breadcrumbs=array(
	'Financialmatters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Financialmatters', 'url'=>array('index')),
	array('label'=>'Manage Financialmatters', 'url'=>array('admin')),
);
?>

<h1>Create Financialmatters</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>