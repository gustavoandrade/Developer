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
		<h2 class="title">User's details</h2>
		<div class="inner">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data' => $model,
				'attributes' => array(
					'IDUSUARIO',
					'NOMBRE',
					'APATERNO',
					'AMATERNO',
					'LOGIN',
					'PASSWORD',
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
				),
				'itemTemplate' => "<tr class=\"{class}\"><td style=\"width: 120px\"><b>{label}</b></td><td>{value}</td></tr>\n",
				'htmlOptions' => array(
					'class' => 'table',
				),
			)); ?>
		</div>
	</div>
</div>