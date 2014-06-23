<?php
/* @var $this GeneralmattersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Generalmatters',
);

$this->menu=array(
	array('label'=>'Create Generalmatters', 'url'=>array('create')),
	array('label'=>'Manage Generalmatters', 'url'=>array('admin')),
);
?>

<h1>Generalmatters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
