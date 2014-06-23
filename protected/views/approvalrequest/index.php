<?php
/* @var $this ApprovalrequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Approvalrequests',
);

$this->menu=array(
	array('label'=>'Create Approvalrequest', 'url'=>array('create')),
	array('label'=>'Manage Approvalrequest', 'url'=>array('admin')),
);
?>

<h1>Approvalrequests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
