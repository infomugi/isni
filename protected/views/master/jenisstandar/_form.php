<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'jenis-standar-form',
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
					<?php echo $form->labelEx($model,'KD_JENIS_STANDAR'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KD_JENIS_STANDAR'); ?>
					<?php echo $form->textField($model,'KD_JENIS_STANDAR',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'NM_JENIS_STANDAR1'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'NM_JENIS_STANDAR1'); ?>
					<?php echo $form->textField($model,'NM_JENIS_STANDAR1',array('class'=>'form-control')); ?>
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