<?php
$this->breadcrumbs=array(
	'Bancoses',
);

$this->menu=array(
	array('label'=>'Create Bancos', 'url'=>array('create')),
	array('label'=>'Manage Bancos', 'url'=>array('admin')),
);
?>

<h1>Bancoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
