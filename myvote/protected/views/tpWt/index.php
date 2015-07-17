<?php
$this->breadcrumbs=array(
	'Tp Wts',
);

$this->menu=array(
	array('label'=>'Create TpWt', 'url'=>array('create')),
	array('label'=>'Manage TpWt', 'url'=>array('admin')),
);
?>

<h1>Tp Wts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
