<?php
/* @var $this IssueController */
/* @var $model Issue */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'issue-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<!--
	<div class="row">
		<?php// echo $form->labelEx($model,'fk_componentDetail'); ?>
		<?php// echo $form->textField($model,'fk_componentDetail',array('size'=>7,'maxlength'=>7)); ?>
		<?php// echo $form->error($model,'fk_componentDetail'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'fk_staff'); ?>
		<?php echo $form->dropDownList($model,'fk_staff',
									CHtml::listData(staff::model()->findAll(
										array('order' => 'fullName ASC')), 'id' , 'fullName'),//This finds and displays staff names in alphabetical order
									array('prompt'=>'Select Staff')); ?>
		<?php echo $form->error($model,'fk_staff'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateIssued'); ?>
		<?php //Date picker widget for purchase date?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
							array('model' => $model, 
								'attribute' => 'dateIssued',
								'options'=> array('showOn' => 'both',
												'dateFormat' => 'yy-mm-dd',
												'changeYear' => true,
												'changeMonth' => true,
												'yearRange' => '2000:2099',)));?>
		<?php echo $form->error($model,'dateIssued'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateReturned'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
							array('model' => $model, 
								'attribute' => 'dateReturned',
								'options'=> array('showOn' => 'both',
												'dateFormat' => 'yy-mm-dd',
												'changeYear' => true,
												'changeMonth' => true,
												'yearRange' => '2000:2099',)));?>
		<?php echo $form->error($model,'dateReturned'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_location'); ?>
		<?php echo $form->dropDownList($model,'fk_location',
									CHtml::listData(location::model()->findAll(
										array('order' => 'name ASC')), 'id' , 'name'),//This finds and displays location names in alphabetical order
									array('prompt'=>'Select Location')); ?>
		<?php echo $form->error($model,'fk_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hostname'); ?>
		<?php echo $form->textField($model,'hostname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'hostname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
