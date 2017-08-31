<?php
/* @var $this Family TreeController */
/* @var $model Family Tree */
/* @var $form CActiveForm */
?>

<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'family-tree-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions'=>array('enctype'=>'multipart/form-data'), 
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'judul'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'judul'); ?>
					<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
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
			     	<?php echo $form->fileField($model,'nm_file',array('class'=>'btn btn-info')); ?>
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