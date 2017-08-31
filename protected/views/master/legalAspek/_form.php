<?php
/* @var $this Legal AspekController */
/* @var $model Legal Aspek */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'legal-aspek-form',
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
					<?php echo $form->labelEx($model,'legal_aspek'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'legal_aspek'); ?>
					<?php echo $form->textField($model,'legal_aspek',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomor'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomor'); ?>
					<?php echo $form->textField($model,'nomor',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggal'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggal'); ?>
					<?php echo $form->textField($model,'tanggal',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tentang'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tentang'); ?>
					<?php echo $form->textField($model,'tentang',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tgl_input'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tgl_input'); ?>
					<?php echo $form->textField($model,'tgl_input',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'user_input'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'user_input'); ?>
					<?php echo $form->textField($model,'user_input',array('class'=>'form-control')); ?>
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
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'muatan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'muatan'); ?>
					<?php echo $form->textField($model,'muatan',array('class'=>'form-control')); ?>
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