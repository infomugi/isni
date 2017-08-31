<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-md-11"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'pengguna-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-warning',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-sm-4 hidden-xs">
					<?php echo $form->labelEx($model,'Password'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Password'); ?>
					<?php echo $form->passwordField($model,'Password',array('class'=>'form-control','placeholder'=>'Password')); ?>
				</div>

			</div>  


			<div class="form-group">
				<div class="col-md-8">
				</div>  
				<div class="col-md-4">  
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Edit', array('class' => 'btn btn-warning btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

		</div>
</div><!-- form -->