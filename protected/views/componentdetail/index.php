<?php
/* @var $this ComponentdetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Component Details',
);

$this->menu=array(
	array('label'=>'Create Component Details', 'url'=>array('create')),
	array('label'=>'Manage Component Details', 'url'=>array('admin')),
);
?>

<h1>Component Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
