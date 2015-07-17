<?php
$this->breadcrumbs=array(
	'Tp Zts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TpZt', 'url'=>array('index')),
	array('label'=>'Manage TpZt', 'url'=>array('admin')),
);
?>

<h1>Create TpZt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>