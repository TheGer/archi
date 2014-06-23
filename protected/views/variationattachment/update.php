<?php
/* @var $this VariationattachmentController */
/* @var $model Variationattachment */

$this->breadcrumbs=array(
	'Variationattachments'=>array('index'),
	$model->variationattachmentid=>array('view','id'=>$model->variationattachmentid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Variationattachment', 'url'=>array('index')),
	array('label'=>'Create Variationattachment', 'url'=>array('create')),
	array('label'=>'View Variationattachment', 'url'=>array('view', 'id'=>$model->variationattachmentid)),
	array('label'=>'Manage Variationattachment', 'url'=>array('admin')),
);
?>

<h1>Update Variationattachment <?php echo $model->variationattachmentid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>