<?php
/* @var $this ComponentdetailController */
/* @var $model Componentdetail */

$this->breadcrumbs=array(
	'Component Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Component Details', 'url'=>array('index')),
	array('label'=>'Create Component Details', 'url'=>array('create')),
	array('label'=>'Update Component Details', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Component Details', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Component Details', 'url'=>array('admin')),
);
?>

<h1>View Componentdetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'componenttypename',
		'tagNo',
		'serialNo',
		'description',
		'project',
		'suppliername',
		'lpoNo',
		'purchaseDate',
		'purchaseValue',
		'deviceStatus',
		'comment',
		'note',
	),
)); ?>

<?php
	$query=Issue::model()->findAllByAttributes(array('fk_componentDetail'=>$model->id));
	$dataProvider = new CArrayDataProvider($rawData=$query);
	$this->widget('zii.widgets.grid.CGridView',
				array(
					'dataProvider'=>$dataProvider,          
					'columns'=>array(
									array('name'=>'id',
										'header'=>'ID'),
									array('name'=>'staffname',
										'header'=>'Staff Name'),
									array('name'=>'dateIssued',
										'header'=>'Date Issued'),
									array('name'=>'dateReturned',
										'header'=>'Date Returned'),
									array('name'=>'locationname',
										'header'=>'Location'),
									array('name'=>'hostname',
										'header'=>'HostName'),
									)
					)
				);
 ?>