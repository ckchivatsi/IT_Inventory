<?php
/* @var $this ComponentdetailController */
/* @var $model Componentdetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'componentdetail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_componentType'); ?>
		<?php echo $form->dropDownList($model,'fk_componentType',
									CHtml::listData(componentType::model()->findAll(
										array('order' => 'name ASC')), 'id' , 'name'),//This finds and displays componentType names in alphabetical order
									array('prompt'=>'Select Component Type')); ?>
		<?php echo $form->error($model,'fk_componentType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tagNo'); ?>
		<?php echo $form->textField($model,'tagNo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tagNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serialNo'); ?>
		<?php echo $form->textField($model,'serialNo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'serialNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project'); ?>
		<?php echo $form->textField($model,'project',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'project'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_supplier'); ?>
		<?php echo $form->dropDownList($model,'fk_supplier',
									CHtml::listData(supplier::model()->findAll(
										array('order' => 'name ASC')), 'id' , 'name'),//This finds and displays supplier names in alphabetical order
									array('prompt'=>'Select Supplier')); ?>
		<?php echo $form->error($model,'fk_supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lpoNo'); ?>
		<?php echo $form->textField($model,'lpoNo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'lpoNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseDate'); ?>
		<?php //Date picker widget for purchase date?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', 
							array('model' => $model, 
								'attribute' => 'purchaseDate',
								'options'=> array('showOn' => 'both',
												'dateFormat' => 'yy-mm-dd',
												'changeYear' => true,
												'changeMonth' => true,
												'yearRange' => '2000:2099',)));?>
		<?php echo $form->error($model,'purchaseDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchaseValue'); ?>
		<?php echo $form->textField($model,'purchaseValue',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'purchaseValue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deviceStatus'); ?>
		<?php echo $form->dropDownList($model,'deviceStatus',
									array('in store'=>'In Store','In Use'=>'In Use','Auctioned'=>'Auctioned'),
									array('prompt'=>'Select Device Status')); ?>
		<?php echo $form->error($model,'deviceStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<!--
<script>
$('#Componentdetail_fk_componentType').change(function(){
 //hide/show hostname 
 if($('#Componentdetail_fk_componentType').val()==4)
 {
  $('#hostname_div').show("slow");
 }
 else{
  $('#hostname_div').hide("slow");
     $('#Componentdetail_hostname').val("");
 }
 
 //hide/show monitor/macScreen
if($('#Componentdetail_fk_componentType').val()==2||//Desktop
	$('#Componentdetail_fk_componentType').val()==5||//Server
	$('#Componentdetail_fk_componentType').val()==8||//Mac Desktop
	$('#Componentdetail_fk_componentType').val()==10)//Thin client
 {
  $('#monitor_div').show("slow");
 }
 else{
  $('#monitor_div').hide("slow");
     $('#Componentdetail_hostname').val("");
 }
});
</script>
-->