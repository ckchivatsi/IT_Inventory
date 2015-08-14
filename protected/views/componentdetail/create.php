<?php
/* @var $this ComponentdetailController */
/* @var $model Componentdetail */

$this->breadcrumbs=array(
	'Component Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Component Details', 'url'=>array('index')),
	array('label'=>'Manage Component Details', 'url'=>array('admin')),
);
?>

<h1>Create Component Details</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>