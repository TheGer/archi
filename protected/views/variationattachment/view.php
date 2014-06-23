<?php
/* @var $this VariationattachmentController */
/* @var $model Variationattachment */

$this->breadcrumbs=array(
	'Variationattachments'=>array('index'),
	$model->variationattachmentid,
);

$this->menu=array(
	array('label'=>'List Variationattachment', 'url'=>array('index')),
	array('label'=>'Create Variationattachment', 'url'=>array('create')),
	array('label'=>'Update Variationattachment', 'url'=>array('update', 'id'=>$model->variationattachmentid)),
	array('label'=>'Delete Variationattachment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->variationattachmentid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Variationattachment', 'url'=>array('admin')),
);
?>

<h1>View Variationattachment #<?php echo $model->variationattachmentid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'variationattachmentid',
		'variationorderid',
		'attachmentpath',
		'attachmentdescription',
	),
)); ?>
