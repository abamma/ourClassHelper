<?php
$this->breadcrumbs=array(
	'Tp Xxes',
);

$this->menu=array(
	array('label'=>'Create TpXx', 'url'=>array('create')),
	array('label'=>'Manage TpXx', 'url'=>array('admin')),
);
?>

<h1>Tp Xxes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
