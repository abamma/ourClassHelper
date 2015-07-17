<?php
$this->breadcrumbs=array(
	'Tp Zts',
);

$this->menu=array(
	array('label'=>'Create TpZt', 'url'=>array('create')),
	array('label'=>'Manage TpZt', 'url'=>array('admin')),
);
?>

<h1>Tp Zts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
