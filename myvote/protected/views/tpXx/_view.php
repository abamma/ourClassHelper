<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tp_total')); ?>:</b>
	<?php echo CHtml::encode($data->tp_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('px')); ?>:</b>
	<?php echo CHtml::encode($data->px); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wtid')); ?>:</b>
	<?php echo CHtml::encode($data->wtid); ?>
	<br />


</div>