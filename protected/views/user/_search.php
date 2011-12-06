<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDUSUARIO'); ?>
		<?php echo $form->textField($model,'IDUSUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APATERNO'); ?>
		<?php echo $form->textField($model,'APATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AMATERNO'); ?>
		<?php echo $form->textField($model,'AMATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOGIN'); ?>
		<?php echo $form->textField($model,'LOGIN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CTRLCALIDAD'); ?>
		<?php echo $form->textField($model,'CTRLCALIDAD',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCALLCENTER'); ?>
		<?php echo $form->textField($model,'IDCALLCENTER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TURNO'); ?>
		<?php echo $form->textField($model,'TURNO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACTIVO'); ?>
		<?php echo $form->textField($model,'ACTIVO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHAVENCIMIENTOPWD'); ?>
		<?php echo $form->textField($model,'FECHAVENCIMIENTOPWD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSESSION'); ?>
		<?php echo $form->textField($model,'IDSESSION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HISTORIAPASSWORD'); ?>
		<?php echo $form->textField($model,'HISTORIAPASSWORD',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VERIFICAIP'); ?>
		<?php echo $form->textField($model,'VERIFICAIP',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHAINGRESO'); ?>
		<?php echo $form->textField($model,'FECHAINGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHAACTIVACION'); ?>
		<?php echo $form->textField($model,'FECHAACTIVACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHADESACTIVACION'); ?>
		<?php echo $form->textField($model,'FECHADESACTIVACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHABAJA'); ?>
		<?php echo $form->textField($model,'FECHABAJA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CEDULA'); ?>
		<?php echo $form->textField($model,'CEDULA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDOPERACION'); ?>
		<?php echo $form->textField($model,'IDOPERACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDTURNO'); ?>
		<?php echo $form->textField($model,'IDTURNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDHORARIO'); ?>
		<?php echo $form->textField($model,'IDHORARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHAULTIMAENTRADA'); ?>
		<?php echo $form->textField($model,'FECHAULTIMAENTRADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TICKETMASTER'); ?>
		<?php echo $form->textField($model,'TICKETMASTER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CELULAR'); ?>
		<?php echo $form->textField($model,'CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSESSIONCCXADV'); ?>
		<?php echo $form->textField($model,'IDSESSIONCCXADV',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->