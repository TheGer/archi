<?php
/* @var $this VariationorderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Variationorders',
);

$this->menu=array(
	array('label'=>'Create Variationorder', 'url'=>array('create')),
	array('label'=>'Manage Variationorder', 'url'=>array('admin')),
);
?>

<h1>Variationorders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
