<?php
$this->menu = array(
	array('label' => 'Users', 'url' => array('index')),
	array('label' => 'Create user', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Create new user</h2>
		<div class="inner">
			<?php $this->renderPartial('_form', array(
				'model' => $model,
			)); ?>
		</div>
	</div>
</div>