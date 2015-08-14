<?php
/* @var $this ComponenttypeController */
/* @var $model Componenttype */

$this->breadcrumbs=array(
	'Component Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Component Types', 'url'=>array('index')),
	array('label'=>'Manage Component Types', 'url'=>array('admin')),
);
?>

<h1>Create Component Types</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>