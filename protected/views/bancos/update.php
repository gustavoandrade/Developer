<?php
$this->breadcrumbs=array(
	'Bancoses'=>array('index'),
	$model->IDBANCO=>array('view','id'=>$model->IDBANCO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bancos', 'url'=>array('index')),
	array('label'=>'Create Bancos', 'url'=>array('create')),
	array('label'=>'View Bancos', 'url'=>array('view', 'id'=>$model->IDBANCO)),
	array('label'=>'Manage Bancos', 'url'=>array('admin')),
);
?>

<h1>Update Bancos <?php echo $model->IDBANCO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>