<?php
$this->menu = array(
	array('label' => 'Users', 'url' => array('index')),
	array('label' => 'Create user', 'url' => array('create')),
	array('label' => 'Update user', 'url' => array('update', 'id' => $model->IDUSUARIO)),
	array('label' => 'Delete user', 'url' => '#', 'linkOptions' => array(
		'submit' => array('delete', 'id' => $model->IDUSUARIO),
		'confirm' => 'Do you really want to delete this user?',
	)),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Update user</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>