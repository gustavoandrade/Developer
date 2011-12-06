<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDBANCO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDBANCO), array('view', 'id'=>$data->IDBANCO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->CLAVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BANCO')); ?>:</b>
	<?php echo CHtml::encode($data->BANCO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODIGOAIG')); ?>:</b>
	<?php echo CHtml::encode($data->CODIGOAIG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TERMINAL')); ?>:</b>
	<?php echo CHtml::encode($data->TERMINAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD_MAPFRE')); ?>:</b>
	<?php echo CHtml::encode($data->COD_MAPFRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPAIS')); ?>:</b>
	<?php echo CHtml::encode($data->IDPAIS); ?>
	<br />


</div>