<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ztid')); ?>:</b>
	<?php echo CHtml::encode($data->ztid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wttype')); ?>:</b>
	<?php echo CHtml::encode($data->wttype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_total')); ?>:</b>
	<?php echo CHtml::encode($data->tp_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('px')); ?>:</b>
	<?php echo CHtml::encode($data->px); ?>
	<br />


</div>