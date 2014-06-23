<?php
/* @var $this ApprovalrequestController */
/* @var $model Approvalrequest */

$this->breadcrumbs=array(
	'Approvalrequests'=>array('index'),
	$model->sarid=>array('view','id'=>$model->sarid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Approvalrequest', 'url'=>array('index')),
	array('label'=>'Create Approvalrequest', 'url'=>array('create')),
	array('label'=>'View Approvalrequest', 'url'=>array('view', 'id'=>$model->sarid)),
	array('label'=>'Manage Approvalrequest', 'url'=>array('admin')),
);
?>

<h1>Update Approvalrequest <?php echo $model->sarid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>