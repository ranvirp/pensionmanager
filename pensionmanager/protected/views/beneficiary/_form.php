<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beneficiary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_husband_name'); ?>
		<?php echo $form->textField($model,'father_husband_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'father_husband_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_account_no'); ?>
		<?php echo $form->textField($model,'bank_account_no'); ?>
		<?php echo $form->error($model,'bank_account_no'); ?>
	</div>
	<div class="row">
<?php echo $form->dropDownList($model,'status',SWHelper::nextStatuslistData($model)); ?>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->