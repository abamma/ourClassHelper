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
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endtime'); ?>
		<?php echo $form->textField($model,'endtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iscookies'); ?>
		<?php echo $form->textField($model,'iscookies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isdl'); ?>
		<?php echo $form->textField($model,'isdl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isip'); ?>
		<?php echo $form->textField($model,'isip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->