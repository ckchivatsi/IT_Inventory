<?php
/* @var $this IssueController */
/* @var $model Issue */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_componentDetail'); ?>
		<?php echo $form->textField($model,'fk_componentDetail',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_staff'); ?>
		<?php echo $form->textField($model,'fk_staff',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateIssued'); ?>
		<?php echo $form->textField($model,'dateIssued'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateReturned'); ?>
		<?php echo $form->textField($model,'dateReturned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_location'); ?>
		<?php echo $form->textField($model,'fk_location',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hostname'); ?>
		<?php echo $form->textField($model,'hostname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->