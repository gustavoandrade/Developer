<?php $provider = $model->search(); ?>
<div class="inner" id="user-grid-inner">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id' => 'user-grid',
		'summaryText' => 'Users {start} - {end} of {count}',
		'emptyText' => 'There are no data to display',
		'updateSelector' => '#user-grid-actions .pagination a, #user-grid .table thead th a',
		'afterAjaxUpdate' => "js:function(id, data){var id = '#' + id + '-actions'; \$(id).replaceWith(\$(id, '<div>' + data + '</div>'))}",
		'selectableRows' => 0,
		'showTableOnEmpty' => false,
		'dataProvider' => $provider,
		'cssFile' => false,
		'itemsCssClass' => 'table',
		'pagerCssClass' => 'pagination',
		'template' => '{items}',
		'columns' => array(
			'IDUSUARIO',
			'NOMBRE',
			'APATERNO',
			'AMATERNO',
			'LOGIN',
			'PASSWORD',
			/*
			'CTRLCALIDAD',
			'IDCALLCENTER',
			'TURNO',
			'ACTIVO',
			'FECHAVENCIMIENTOPWD',
			'IDSESSION',
			'HISTORIAPASSWORD',
			'EMAIL',
			'VERIFICAIP',
			'FECHAINGRESO',
			'FECHAACTIVACION',
			'FECHADESACTIVACION',
			'FECHABAJA',
			'CEDULA',
			'IDOPERACION',
			'IDTURNO',
			'IDHORARIO',
			'FECHAULTIMAENTRADA',
			'TICKETMASTER',
			'CELULAR',
			'IDSESSIONCCXADV',
			*/
			array(
				'class' => 'EButtonColumn',
				'deleteConfirmation' => 'Do you really want to delete this user?',
			),
		),
	)); ?>
	<div class="actions-bar wat-cf" id="user-grid-actions">
		<div class="actions">
			<button class="button action-create" type="button">
				<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/create.png', 'Create'); ?> Create user
			</button>
		</div>
		<?php $this->widget('application.components.widgets.ELinkPager', array(
			'cssFile' => false,
			'pages' => $provider->getPagination(),
		)); ?>
	</div>
</div>