<?php
/* @var $this ComponenttypeController */
/* @var $model Componenttype */

$this->breadcrumbs=array(
	'Component Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Component Types', 'url'=>array('index')),
	array('label'=>'Create Component Types', 'url'=>array('create')),
	array('label'=>'View Component Types', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Component Types', 'url'=>array('admin')),
);
?>

<h1>Update Component Types <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>