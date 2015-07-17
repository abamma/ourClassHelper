<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tp-zt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime'); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row" onclick="SelectDate(this)">
		<?php echo $form->labelEx($model,'endtime'); ?>
		<?php echo $form->textField($model,'endtime'); ?>
		<?php echo $form->error($model,'endtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iscookies'); ?>
		<?php echo $form->textField($model,'iscookies'); ?>
		<?php echo $form->error($model,'iscookies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isdl'); ?>
		<?php echo $form->textField($model,'isdl'); ?>
		<?php echo $form->error($model,'isdl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isip'); ?>
		<?php echo $form->textField($model,'isip'); ?>
		<?php echo $form->error($model,'isip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->