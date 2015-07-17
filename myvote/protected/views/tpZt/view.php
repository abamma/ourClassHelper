<?php
$this->breadcrumbs=array(
	'Tp Zts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TpZt', 'url'=>array('index')),
	array('label'=>'Create TpZt', 'url'=>array('create')),
	array('label'=>'Update TpZt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TpZt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TpZt', 'url'=>array('admin')),
);
?>

<h1>View TpZt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'addtime',
		'endtime',
		'iscookies',
		'isdl',
		'isip',
	),
)); ?>
