<?php
$this->breadcrumbs=array(
	'Tp Xxes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TpXx', 'url'=>array('index')),
	array('label'=>'Manage TpXx', 'url'=>array('admin')),
);
?>

<h1>Create TpXx</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>