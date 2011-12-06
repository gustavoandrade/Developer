<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
	'focus' => array($model, 'NOMBRE'),
	'htmlOptions' => array(
		'class' => 'form',
	),
)); ?>
		
	<div class="group">
		<?php if($model->hasErrors('NOMBRE')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'NOMBRE', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('NOMBRE')): ?>
				<span class="error"><?php echo $model->getError('NOMBRE'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'NOMBRE', array('size' => 50, 'maxlength' => 50, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('APATERNO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'APATERNO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('APATERNO')): ?>
				<span class="error"><?php echo $model->getError('APATERNO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'APATERNO', array('size' => 50, 'maxlength' => 50, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('AMATERNO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'AMATERNO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('AMATERNO')): ?>
				<span class="error"><?php echo $model->getError('AMATERNO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'AMATERNO', array('size' => 50, 'maxlength' => 50, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('LOGIN')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'LOGIN', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('LOGIN')): ?>
				<span class="error"><?php echo $model->getError('LOGIN'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'LOGIN', array('size' => 20, 'maxlength' => 20, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('PASSWORD')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'PASSWORD', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('PASSWORD')): ?>
				<span class="error"><?php echo $model->getError('PASSWORD'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->passwordField($model, 'PASSWORD', array('size' => 20, 'maxlength' => 20, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('CTRLCALIDAD')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'CTRLCALIDAD', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('CTRLCALIDAD')): ?>
				<span class="error"><?php echo $model->getError('CTRLCALIDAD'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'CTRLCALIDAD', array('size' => 1, 'maxlength' => 1, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDCALLCENTER')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDCALLCENTER', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDCALLCENTER')): ?>
				<span class="error"><?php echo $model->getError('IDCALLCENTER'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDCALLCENTER', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('TURNO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'TURNO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('TURNO')): ?>
				<span class="error"><?php echo $model->getError('TURNO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'TURNO', array('size' => 1, 'maxlength' => 1, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('ACTIVO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'ACTIVO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('ACTIVO')): ?>
				<span class="error"><?php echo $model->getError('ACTIVO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'ACTIVO', array('size' => 1, 'maxlength' => 1, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHAVENCIMIENTOPWD')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHAVENCIMIENTOPWD', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHAVENCIMIENTOPWD')): ?>
				<span class="error"><?php echo $model->getError('FECHAVENCIMIENTOPWD'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHAVENCIMIENTOPWD', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDSESSION')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDSESSION', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDSESSION')): ?>
				<span class="error"><?php echo $model->getError('IDSESSION'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDSESSION', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('HISTORIAPASSWORD')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'HISTORIAPASSWORD', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('HISTORIAPASSWORD')): ?>
				<span class="error"><?php echo $model->getError('HISTORIAPASSWORD'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'HISTORIAPASSWORD', array('size' => 32, 'maxlength' => 32, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('EMAIL')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'EMAIL', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('EMAIL')): ?>
				<span class="error"><?php echo $model->getError('EMAIL'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'EMAIL', array('size' => 60, 'maxlength' => 100, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('VERIFICAIP')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'VERIFICAIP', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('VERIFICAIP')): ?>
				<span class="error"><?php echo $model->getError('VERIFICAIP'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'VERIFICAIP', array('size' => 1, 'maxlength' => 1, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHAINGRESO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHAINGRESO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHAINGRESO')): ?>
				<span class="error"><?php echo $model->getError('FECHAINGRESO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHAINGRESO', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHAACTIVACION')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHAACTIVACION', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHAACTIVACION')): ?>
				<span class="error"><?php echo $model->getError('FECHAACTIVACION'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHAACTIVACION', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHADESACTIVACION')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHADESACTIVACION', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHADESACTIVACION')): ?>
				<span class="error"><?php echo $model->getError('FECHADESACTIVACION'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHADESACTIVACION', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHABAJA')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHABAJA', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHABAJA')): ?>
				<span class="error"><?php echo $model->getError('FECHABAJA'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHABAJA', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('CEDULA')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'CEDULA', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('CEDULA')): ?>
				<span class="error"><?php echo $model->getError('CEDULA'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'CEDULA', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDOPERACION')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDOPERACION', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDOPERACION')): ?>
				<span class="error"><?php echo $model->getError('IDOPERACION'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDOPERACION', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDTURNO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDTURNO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDTURNO')): ?>
				<span class="error"><?php echo $model->getError('IDTURNO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDTURNO', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDHORARIO')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDHORARIO', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDHORARIO')): ?>
				<span class="error"><?php echo $model->getError('IDHORARIO'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDHORARIO', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('FECHAULTIMAENTRADA')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'FECHAULTIMAENTRADA', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('FECHAULTIMAENTRADA')): ?>
				<span class="error"><?php echo $model->getError('FECHAULTIMAENTRADA'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'FECHAULTIMAENTRADA', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('TICKETMASTER')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'TICKETMASTER', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('TICKETMASTER')): ?>
				<span class="error"><?php echo $model->getError('TICKETMASTER'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'TICKETMASTER', array('size' => 1, 'maxlength' => 1, 'class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('CELULAR')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'CELULAR', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('CELULAR')): ?>
				<span class="error"><?php echo $model->getError('CELULAR'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'CELULAR', array('class' => 'text_field')); ?>
	</div>
		
	<div class="group">
		<?php if($model->hasErrors('IDSESSIONCCXADV')): ?>
			<div class="fieldWithErrors">
		<?php endif; ?>
		<?php echo $form->labelEx($model, 'IDSESSIONCCXADV', array('class' => 'label')); ?>
		<?php if ($model->hasErrors('IDSESSIONCCXADV')): ?>
				<span class="error"><?php echo $model->getError('IDSESSIONCCXADV'); ?></span>
			</div>
		<?php endif; ?>
		<?php echo $form->textField($model, 'IDSESSIONCCXADV', array('size' => 60, 'maxlength' => 255, 'class' => 'text_field')); ?>
	</div>
	
	<div class="group navform wat-cf">
		<button class="button" type="submit">
			<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/save.png', $model->isNewRecord ? 'Create' : 'Save'); ?> <?php echo $model->isNewRecord ? 'Create' : 'Save'; ?>
		</button>
		<span class="text_button_padding">or</span>
		<?php echo CHtml::link('Cancel', array('index'), array('class' => 'text_button_padding link_button')); ?>
	</div>
<?php $this->endWidget(); ?>