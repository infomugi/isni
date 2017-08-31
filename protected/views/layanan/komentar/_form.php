<?php
/* @var $this KomentarController */
/* @var $model Komentar */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'komentar-form',
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
							<?php echo $form->labelEx($model,'tanggal_komentar'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tanggal_komentar'); ?>
							<?php echo $form->textField($model,'tanggal_komentar'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'pengguna_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'pengguna_id'); ?>
							<?php echo $form->textField($model,'pengguna_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'standar_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'standar_id'); ?>
							<?php echo $form->textField($model,'standar_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'deskripsi'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'deskripsi'); ?>
							<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'tanggal_jawab'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'tanggal_jawab'); ?>
							<?php echo $form->textField($model,'tanggal_jawab'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'admin_id'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'admin_id'); ?>
							<?php echo $form->textField($model,'admin_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'jawaban'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'jawaban'); ?>
							<?php echo $form->textArea($model,'jawaban',array('rows'=>6, 'cols'=>50)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'like'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'like'); ?>
							<?php echo $form->textField($model,'like'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'unlike'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'unlike'); ?>
							<?php echo $form->textField($model,'unlike'),array('class'=>'form-control')); ?>
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