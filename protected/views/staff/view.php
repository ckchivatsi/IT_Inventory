<?php
/* @var $this StaffController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Staff'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Staff', 'url'=>array('index')),
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'Update Staff', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Staff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h1>View Staff #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fullName',
		'usrName',
		'email',
		'locationname',
		'payrollNo',
	),
)); ?>

<?php
	$query=Issue::model()->findAllByAttributes(array('fk_staff'=>$model->id));
	$dataProvider = new CArrayDataProvider($rawData=$query);
	$this->widget('zii.widgets.grid.CGridView',
				array(
					'dataProvider'=>$dataProvider,          
					'columns'=>array(
									array('name'=>'id',
										'header'=>'ID'),
									array('name'=>'componenttag',
										'header'=>'Device TagNo'),
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