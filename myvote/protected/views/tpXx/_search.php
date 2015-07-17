<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tp_total'); ?>
		<?php echo $form->textField($model,'tp_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'px'); ?>
		<?php echo $form->textField($model,'px'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wtid'); ?>
		<?php echo $form->textField($model,'wtid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->