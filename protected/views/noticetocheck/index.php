<?php
/* @var $this NoticetocheckController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Noticetochecks',
);

$this->menu=array(
	array('label'=>'Create Noticetocheck', 'url'=>array('create')),
	array('label'=>'Manage Noticetocheck', 'url'=>array('admin')),
);
?>

<h1>Noticetochecks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
