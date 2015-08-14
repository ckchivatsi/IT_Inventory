<?php
/* @var $this IssueController */
/* @var $data Issue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_componentDetail')); ?>:</b>
	<?php echo CHtml::encode($data->componenttag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_staff')); ?>:</b>
	<?php echo CHtml::encode($data->staffname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateIssued')); ?>:</b>
	<?php echo CHtml::encode($data->dateIssued); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateReturned')); ?>:</b>
	<?php echo CHtml::encode($data->dateReturned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_location')); ?>:</b>
	<?php echo CHtml::encode($data->locationname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hostname')); ?>:</b>
	<?php echo CHtml::encode($data->hostname); ?>
	<br />


</div>
