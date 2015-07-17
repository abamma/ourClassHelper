<?php
$this->breadcrumbs=array(
	'Tp Wts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TpWt', 'url'=>array('index')),
	array('label'=>'Create TpWt', 'url'=>array('create')),
	array('label'=>'View TpWt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TpWt', 'url'=>array('admin')),
);
?>

<h1>Update TpWt <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>