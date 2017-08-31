<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'event-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'name'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'description'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'description'); ?>
					<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'start_date'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'start_date'); ?>
					<?php echo $form->textField($model,'start_date',array('class'=>'form-control')); ?>
				</div>
				
			</div>  


			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'end_date'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'end_date'); ?>
					<?php echo $form->textField($model,'end_date',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'time'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'time'); ?>
					<?php echo $form->textField($model,'time',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'location'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'location'); ?>
					<?php echo $form->textField($model,'location',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status'); ?>
					<?php
					echo $form->radioButtonList($model,'status',
						array('1'=>'Enable','0'=>'Disable'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=>'padding-right:20px;margin-left:15px'),

							)                              
						);
						?>
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

		<link rel="stylesheet" href="http://t00rk.github.io/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="http://t00rk.github.io/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				$('#Event_time').bootstrapMaterialDatePicker({ date: false, format : 'HH:mm' });
				$('#Event_end_date').bootstrapMaterialDatePicker({ weekStart : 0, time: false, lang : 'id', cancelText : 'BATAL' });
				$('#Event_start_date').bootstrapMaterialDatePicker({ weekStart : 0, time: false, lang : 'id' }).on('change', function(e, date)
					{$('#Event_end_date').bootstrapMaterialDatePicker('setMinDate', date);});
				$.material.init()
			});
		</script>

