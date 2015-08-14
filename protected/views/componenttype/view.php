<?php
/* @var $this ComponenttypeController */
/* @var $model Componenttype */

$this->breadcrumbs=array(
	'Component Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Component Types', 'url'=>array('index')),
	array('label'=>'Create Component Types', 'url'=>array('create')),
	array('label'=>'Update Component Types', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Component Types', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Component Types', 'url'=>array('admin')),
);
?>

<h1>View Component Types #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
