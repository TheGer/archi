<?php
/* @var $this VariationattachmentController */
/* @var $model Variationattachment */

$this->breadcrumbs=array(
	'Variationattachments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Variationattachment', 'url'=>array('index')),
	array('label'=>'Manage Variationattachment', 'url'=>array('admin')),
);
?>

<h1>Create Variationattachment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>