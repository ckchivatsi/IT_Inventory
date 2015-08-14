<?php
/* @var $this ComponentdetailController */
/* @var $data Componentdetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_componentType')); ?>:</b>
	<?php echo CHtml::encode($data->fkComponentType->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tagNo')); ?>:</b>
	<?php echo CHtml::encode($data->tagNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serialNo')); ?>:</b>
	<?php echo CHtml::encode($data->serialNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project')); ?>:</b>
	<?php echo CHtml::encode($data->project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_supplier')); ?>:</b>
	<?php echo CHtml::encode($data->suppliername); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('lpoNo')); ?>:</b>
	<?php echo CHtml::encode($data->lpoNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseDate')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchaseValue')); ?>:</b>
	<?php echo CHtml::encode($data->purchaseValue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deviceStatus')); ?>:</b>
	<?php echo CHtml::encode($data->deviceStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	

</div>