<?php
/* @var $this StaffController */
/* @var $data Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullName')); ?>:</b>
	<?php echo CHtml::encode($data->fullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usrName')); ?>:</b>
	<?php echo CHtml::encode($data->usrName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_location')); ?>:</b>
	<?php echo CHtml::encode($data->locationname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payrollNo')); ?>:</b>
	<?php echo CHtml::encode($data->payrollNo); ?>
	<br />


</div>