<?php
/* @var $this TechnicalmattersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Technicalmatters',
);

$this->menu=array(
	array('label'=>'Create Technicalmatters', 'url'=>array('create')),
	array('label'=>'Manage Technicalmatters', 'url'=>array('admin')),
);
?>

<h1>Technicalmatters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
