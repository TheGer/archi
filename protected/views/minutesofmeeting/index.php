<?php
/* @var $this MinutesofmeetingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Minutesofmeetings',
);

$this->menu=array(
	array('label'=>'Create Minutesofmeeting', 'url'=>array('create')),
	array('label'=>'Manage Minutesofmeeting', 'url'=>array('admin')),
);
?>

<h1>Minutesofmeetings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
