<?php
/* @var $this StreamController */
/* @var $model Stream */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'stream-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'errorMessageCssClass' => 'label label-danger',
			'clientOptions'=>array('validateOnSubmit'=>true),
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
					<?php echo $form->labelEx($model,'image'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'image'); ?>
					<?php echo $form->fileField($model,'image',array('class'=>'btn btn-info')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'url'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'url'); ?>
					<?php echo $form->textField($model,'url',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'type'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'type'); ?>
					<div class="radio radio-info radio-inline">
						<?php
						echo $form->radioButtonList($model,'type',
							array('1'=>'CCTV Streaming','2'=>'Youtube Video'),
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
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'status'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'status'); ?>
						<div class="radio radio-info radio-inline">
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
						
					</div>  

					<div class="form-group">
						<div class="col-md-12">  
						</br></br>
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
					</div>
				</div>

				<?php $this->endWidget(); ?>

</div></div><!-- form -->