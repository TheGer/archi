<?php
/* @var $this NoticetocheckController */
/* @var $model Noticetocheck */

$this->breadcrumbs=array(
	'Noticetochecks'=>array('index'),
	$model->noticetocheckid=>array('view','id'=>$model->noticetocheckid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Noticetocheck', 'url'=>array('index')),
	array('label'=>'Create Noticetocheck', 'url'=>array('create')),
	array('label'=>'View Noticetocheck', 'url'=>array('view', 'id'=>$model->noticetocheckid)),
	array('label'=>'Manage Noticetocheck', 'url'=>array('admin')),
);
?>

<h1>Update Noticetocheck <?php echo $model->noticetocheckid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>