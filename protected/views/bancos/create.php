<?php
$this->breadcrumbs=array(
	'Bancoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bancos', 'url'=>array('index')),
	array('label'=>'Manage Bancos', 'url'=>array('admin')),
);
?>

<h1>Create Bancos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>