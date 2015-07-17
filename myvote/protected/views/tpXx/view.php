<?php
$this->breadcrumbs=array(
	'Tp Xxes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TpXx', 'url'=>array('index')),
	array('label'=>'Create TpXx', 'url'=>array('create')),
	array('label'=>'Update TpXx', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TpXx', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TpXx', 'url'=>array('admin')),
);
?>

<h1>View TpXx #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'tp_total',
		'px',
		'wtid',
	),
)); ?>
