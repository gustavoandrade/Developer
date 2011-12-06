<?php
$url = CJavaScript::quote($this->createUrl('create'), true);
Yii::app()->clientScript
	->registerCoreScript('jquery')
	->registerScript('user-grid-init', "
$('#user-grid-actions button.action-create').live('click', function(){
	document.location.href = '{$url}';
	return false;
});
	");
$this->menu = array(
	array('label' => 'Users', 'url' => array('index')),
	array('label' => 'Create user', 'url' => array('create')),
);
?>
<div class="block">
	<div class="content">
		<h2 class="title">Users</h2>
		<?php $this->renderPartial('_grid', array(
			'model' => $model,
		)); ?>
	</div>
</div>