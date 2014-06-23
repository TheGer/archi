<?php
/* @var $this HealthandsafetyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healthandsafeties',
);

$this->menu=array(
	array('label'=>'Create Healthandsafety', 'url'=>array('create')),
	array('label'=>'Manage Healthandsafety', 'url'=>array('admin')),
);
?>

<h1>Healthandsafeties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
