<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	'注册用户',
);


?>

<h1>注册用户</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>