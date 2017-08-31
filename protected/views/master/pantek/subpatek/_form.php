<?php
/* @var $this Sub Panitia TeknisController */
/* @var $model Sub Panitia Teknis */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'Sub Panitia Teknis-form',
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
							<?php echo $form->labelEx($model,'KD_SUBPATEK'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'KD_SUBPATEK'); ?>
							<?php echo $form->textField($model,'KD_SUBPATEK',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'KD_PATEK'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'KD_PATEK'); ?>
							<?php echo $form->textField($model,'KD_PATEK',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'NM_SUBPATEK'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'NM_SUBPATEK'); ?>
							<?php echo $form->textField($model,'NM_SUBPATEK',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'JAWAB'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'JAWAB'); ?>
							<?php echo $form->textField($model,'JAWAB',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'KODE_SUBPATEK'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'KODE_SUBPATEK'); ?>
							<?php echo $form->textField($model,'KODE_SUBPATEK',array('class'=>'form-control')); ?>
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