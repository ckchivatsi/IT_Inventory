<?php
/* @var $this ComponentdetailController */
/* @var $model Componentdetail */

$this->breadcrumbs=array(
	'Component Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Component Details', 'url'=>array('index')),
	array('label'=>'Create Component Details', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#componentdetail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Component Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'componentdetail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'fk_componentType',
		array(
			'name'=>'fk_componentType',
			'type'=>'raw',
			'value'=>'$data->fkComponentType->name',
			'filter'=>CHtml::listData(componentType::model()->findAll(
						array(
							'order' =>'name ASC',                   
							)),'id','name')
			),
		'tagNo',
		'serialNo',
		'description',
		'project',
		/*
		//'fk_supplier',
		array('header'=>'Supplier','value'=>'$data->fkSupplier->name'),
		'lpoNo',
		'purchaseDate',
		'purchaseValue',
		*/
		'deviceStatus',
		/*
		'comment',
		'note',
		*/
		array(  
			'header'=>'Issue/Return',
			'name'  => 'issue_device',
			'value'=>'$data->setLinks()',
			'type'  => 'raw'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
