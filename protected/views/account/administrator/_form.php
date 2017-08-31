<?php
/* @var $this AdministratorController */
/* @var $model Administrator */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'administrator-form',
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
							<?php echo $form->labelEx($model,'user_name'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'user_name'); ?>
							<?php echo $form->textField($model,'user_name',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'pass'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'pass'); ?>
							<?php echo $form->passwordField($model,'pass',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'email'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'email'); ?>
							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'nama'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'nama'); ?>
							<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'alamat'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'alamat'); ?>
							<?php echo $form->textField($model,'alamat',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'no_telp'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'no_telp'); ?>
							<?php echo $form->textField($model,'no_telp',array('class'=>'form-control')); ?>
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