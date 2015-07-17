<?php
$this->breadcrumbs=array(
	'Tp Xxes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TpXx', 'url'=>array('index')),
	array('label'=>'Create TpXx', 'url'=>array('create')),
	array('label'=>'View TpXx', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TpXx', 'url'=>array('admin')),
);
?>

<h1>Update TpXx <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>