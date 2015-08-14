<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs=array(
	'Locations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Location', 'url'=>array('index')),
	array('label'=>'Create Location', 'url'=>array('create')),
	array('label'=>'Update Location', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Location', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Location', 'url'=>array('admin')),
);
?>

<h1>View Location #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

<?php
	$query=Issue::model()->findAllByAttributes(array('fk_location'=>$model->id));
	$dataProvider = new CArrayDataProvider($rawData=$query);
	$this->widget('zii.widgets.grid.CGridView',
				array(
					'dataProvider'=>$dataProvider,          
					'columns'=>array(
									array('name'=>'id',
										'header'=>'ID'),
									array('name'=>'componenttag',
										'header'=>'Device TagNo'),
									array('name'=>'staffname',
										'header'=>'Staff Name'),
									array('name'=>'dateIssued',
										'header'=>'Date Issued'),
									array('name'=>'dateReturned',
										'header'=>'Date Returned'),
									array('name'=>'hostname',
										'header'=>'HostName'),
									)
					)
				);
 ?>