<?php
/* @var $this IstilahController */
/* @var $model Istilah */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'istilah-form',
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
					<?php echo $form->labelEx($model,'istilah'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'istilah'); ?>
					<?php echo $form->textField($model,'istilah',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'definisi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'definisi'); ?>
					<?php echo $form->textArea($model,'definisi',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'id_bidang'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'id_bidang'); ?>
					<?php 
					echo $form->dropDownList($model, "id_bidang",
						CHtml::listData(MstBidang::model()->findAll(),
							'kd_bidang', 'nm_bidang'
							),
						array("empty"=>"-- Bidang --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'no_id'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'no_id'); ?>
						<?php echo $form->textField($model,'no_id',array('class'=>'form-control')); ?>
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