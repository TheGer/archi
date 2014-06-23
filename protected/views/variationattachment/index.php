<?php
/* @var $this VariationattachmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Variationattachments',
);

$this->menu=array(
	array('label'=>'Create Variationattachment', 'url'=>array('create')),
	array('label'=>'Manage Variationattachment', 'url'=>array('admin')),
);
?>

<h1>Variationattachments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
