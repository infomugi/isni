<?php
/* @var $this Advis TeknisController */
/* @var $model Advis Teknis */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'advis-teknis-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nm_advis_teknis'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nm_advis_teknis'); ?>
					<?php echo $form->textField($model,'nm_advis_teknis',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'keterangan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'keterangan'); ?>
					<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nm_file'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nm_file'); ?>
					<?php echo $form->textField($model,'nm_file',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->