<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDBANCO'); ?>
		<?php echo $form->textField($model,'IDBANCO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLAVE'); ?>
		<?php echo $form->textField($model,'CLAVE',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BANCO'); ?>
		<?php echo $form->textField($model,'BANCO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODIGOAIG'); ?>
		<?php echo $form->textField($model,'CODIGOAIG',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TERMINAL'); ?>
		<?php echo $form->textField($model,'TERMINAL',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD_MAPFRE'); ?>
		<?php echo $form->textField($model,'COD_MAPFRE',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPAIS'); ?>
		<?php echo $form->textField($model,'IDPAIS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->