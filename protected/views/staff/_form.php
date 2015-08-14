<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fullName'); ?>
		<?php echo $form->textField($model,'fullName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'fullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usrName'); ?>
		<?php echo $form->textField($model,'usrName',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usrName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_location'); ?>
		<?php echo $form->dropDownList($model,'fk_location',
									CHtml::listData(location::model()->findAll(
										array('order'=>'name ASC')), 
									'id' , 'name'),
									array('prompt'=>'Select Location')); ?>
		<?php echo $form->error($model,'fk_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payrollNo'); ?>
		<?php echo $form->textField($model,'payrollNo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'payrollNo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->