<?php
/* @var $this NoticetocheckController */
/* @var $model Noticetocheck */

$this->breadcrumbs=array(
	'Noticetochecks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Noticetocheck', 'url'=>array('index')),
	array('label'=>'Manage Noticetocheck', 'url'=>array('admin')),
);
?>

<h1>Create Noticetocheck</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>