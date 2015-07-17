<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tp-xx-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_total'); ?>
		<?php echo $form->textField($model,'tp_total'); ?>
		<?php echo $form->error($model,'tp_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'px'); ?>
		<?php echo $form->textField($model,'px'); ?>
		<?php echo $form->error($model,'px'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wtid'); ?>
		<?php echo $form->dropDownList($model,'wtid',TpWt::model()->getWtlist())?>
		<?php echo $form->error($model,'wtid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->