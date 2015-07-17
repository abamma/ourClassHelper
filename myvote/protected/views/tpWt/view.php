<?php
$this->breadcrumbs=array(
	'Tp Wts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TpWt', 'url'=>array('index')),
	array('label'=>'Create TpWt', 'url'=>array('create')),
	array('label'=>'Update TpWt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TpWt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TpWt', 'url'=>array('admin')),
);
?>

<h1>View TpWt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'ztid',
		'wttype',
		'tp_total',
		'px',
	),
)); ?>
