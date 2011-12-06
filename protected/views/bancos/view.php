<?php
$this->breadcrumbs=array(
	'Bancoses'=>array('index'),
	$model->IDBANCO,
);

$this->menu=array(
	array('label'=>'List Bancos', 'url'=>array('index')),
	array('label'=>'Create Bancos', 'url'=>array('create')),
	array('label'=>'Update Bancos', 'url'=>array('update', 'id'=>$model->IDBANCO)),
	array('label'=>'Delete Bancos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDBANCO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bancos', 'url'=>array('admin')),
);
?>

<h1>View Bancos #<?php echo $model->IDBANCO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDBANCO',
		'CLAVE',
		'BANCO',
		'CODIGOAIG',
		'TERMINAL',
		'COD_MAPFRE',
		'IDPAIS',
	),
)); ?>
