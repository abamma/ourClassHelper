<?php
$this->breadcrumbs=array(
	'Tp Wts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TpWt', 'url'=>array('index')),
	array('label'=>'Manage TpWt', 'url'=>array('admin')),
);
?>

<h1>Create TpWt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>