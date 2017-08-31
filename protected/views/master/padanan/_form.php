<?php
/* @var $this PadananController */
/* @var $model Padanan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'tb-padanan-form',
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
							<?php echo $form->labelEx($model,'KD_PADANAN'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'KD_PADANAN'); ?>
							<?php echo $form->textField($model,'KD_PADANAN',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'NO_PADANAN'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'NO_PADANAN'); ?>
							<?php echo $form->textField($model,'NO_PADANAN',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'DESKRIPSI'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'DESKRIPSI'); ?>
							<?php echo $form->textField($model,'DESKRIPSI',array('class'=>'form-control')); ?>
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