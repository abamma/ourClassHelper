<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endtime')); ?>:</b>
	<?php echo CHtml::encode($data->endtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iscookies')); ?>:</b>
	<?php echo CHtml::encode($data->iscookies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isdl')); ?>:</b>
	<?php echo CHtml::encode($data->isdl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isip')); ?>:</b>
	<?php echo CHtml::encode($data->isip); ?>
	<br />


</div>