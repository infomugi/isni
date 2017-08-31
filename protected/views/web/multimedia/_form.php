<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'multimedia-form',
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
					<?php echo $form->labelEx($model,'TITLE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'TITLE'); ?>
					<?php echo $form->textField($model,'TITLE',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'DESCRIPTION'); ?>
					<?php echo $form->textArea($model,'DESCRIPTION',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'FILE_DATE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'FILE_DATE'); ?>
					<?php echo $form->textField($model,'FILE_DATE',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'FILE_TYPE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'FILE_TYPE'); ?>
					<?php echo $form->textField($model,'FILE_TYPE',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'FILE_NAME'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'FILE_NAME'); ?>
					<?php echo $form->textField($model,'FILE_NAME',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'STATUS'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'STATUS'); ?>
					<?php echo $form->textField($model,'STATUS',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'C_DATE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'C_DATE'); ?>
					<?php echo $form->textField($model,'C_DATE',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'C_UID'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'C_UID'); ?>
					<?php echo $form->textField($model,'C_UID',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'M_DATE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'M_DATE'); ?>
					<?php echo $form->textField($model,'M_DATE',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'M_UID'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'M_UID'); ?>
					<?php echo $form->textField($model,'M_UID',array('class'=>'form-control')); ?>
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