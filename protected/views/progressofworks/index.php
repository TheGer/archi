<?php
/* @var $this ProgressofworksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Progressofworks',
);

$this->menu=array(
	array('label'=>'Create Progressofworks', 'url'=>array('create')),
	array('label'=>'Manage Progressofworks', 'url'=>array('admin')),
);
?>

<h1>Progressofworks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
