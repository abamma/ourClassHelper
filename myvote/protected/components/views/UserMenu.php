<ul>
	<li><?php echo CHtml::link('用户添加', array('user/create'));?></li>
	<li><?php echo CHtml::link('用户管理', array('user/admin'));?></li>
	<li><?php echo CHtml::link('更新资料', array('user/update', 'id'=>Yii::app()->user->id));?></li>
	<li><?php echo CHtml::link('注销帐号 ['.Yii::app()->user->name.']', array('Default/logout'));?></li>
</ul>