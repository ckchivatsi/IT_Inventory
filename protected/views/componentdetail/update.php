<?php
/* @var $this ComponentdetailController */
/* @var $model Componentdetail */

$this->breadcrumbs=array(
	'Component Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Component Details', 'url'=>array('index')),
	array('label'=>'Create Component Details', 'url'=>array('create')),
	array('label'=>'View Component Details', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Component Details', 'url'=>array('admin')),
);
?>

<h1>Update Component Details <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>