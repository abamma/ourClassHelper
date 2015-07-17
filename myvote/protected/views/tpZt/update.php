<?php
$this->breadcrumbs=array(
	'Tp Zts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TpZt', 'url'=>array('index')),
	array('label'=>'Create TpZt', 'url'=>array('create')),
	array('label'=>'View TpZt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TpZt', 'url'=>array('admin')),
);
?>

<h1>Update TpZt <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>