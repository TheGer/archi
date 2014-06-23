<?php
/* @var $this DailyrecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dailyrecords',
);

$this->menu=array(
	array('label'=>'Create Dailyrecord', 'url'=>array('create')),
	array('label'=>'Manage Dailyrecord', 'url'=>array('admin')),
);
?>

<h1>Dailyrecords</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
