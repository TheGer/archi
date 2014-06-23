<?php
/* @var $this FinancialmattersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Financialmatters',
);

$this->menu=array(
	array('label'=>'Create Financialmatters', 'url'=>array('create')),
	array('label'=>'Manage Financialmatters', 'url'=>array('admin')),
);
?>

<h1>Financialmatters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
