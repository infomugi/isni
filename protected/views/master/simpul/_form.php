<?php
/* @var $this SimpulController */
/* @var $model Simpul */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'simpul-form',
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
					<?php echo $form->labelEx($model,'kd_simpul'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kd_simpul'); ?>
					<?php echo $form->textField($model,'kd_simpul',array('class'=>'form-control')); ?>
				</div>
				
			</div>  
			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Nama'); ?>
					<?php echo $form->textField($model,'Nama',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Alamat'); ?>
					<?php echo $form->textField($model,'Alamat',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Email'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Email'); ?>
					<?php echo $form->textField($model,'Email',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'Website'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'Website'); ?>
					<?php echo $form->textField($model,'Website',array('class'=>'form-control')); ?>
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