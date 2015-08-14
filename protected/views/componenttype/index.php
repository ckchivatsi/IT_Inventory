<?php
/* @var $this ComponenttypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Component Types',
);

$this->menu=array(
	array('label'=>'Create Component Types', 'url'=>array('create')),
	array('label'=>'Manage Component Types', 'url'=>array('admin')),
);
?>

<h1>Component Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
