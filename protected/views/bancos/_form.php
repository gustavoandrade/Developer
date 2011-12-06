<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bancos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CLAVE'); ?>
		<?php echo $form->textField($model,'CLAVE',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'CLAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BANCO'); ?>
		<?php echo $form->textField($model,'BANCO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'BANCO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODIGOAIG'); ?>
		<?php echo $form->textField($model,'CODIGOAIG',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'CODIGOAIG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TERMINAL'); ?>
		<?php echo $form->textField($model,'TERMINAL',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'TERMINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD_MAPFRE'); ?>
		<?php echo $form->textField($model,'COD_MAPFRE',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'COD_MAPFRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDPAIS'); ?>
		<?php echo $form->textField($model,'IDPAIS'); ?>
		<?php echo $form->error($model,'IDPAIS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->