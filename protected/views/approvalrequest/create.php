<?php
/* @var $this ApprovalrequestController */
/* @var $model Approvalrequest */

$this->breadcrumbs=array(
	'Approvalrequests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Approvalrequest', 'url'=>array('index')),
	array('label'=>'Manage Approvalrequest', 'url'=>array('admin')),
);
?>

<h1>Create Approvalrequest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>