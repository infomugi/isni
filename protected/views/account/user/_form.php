<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'fullname'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'fullname'); ?>
					<?php echo $form->textField($model,'fullname',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'gender'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'gender'); ?>
					<?php
					echo $form->radioButtonList($model,'gender',
						array('1'=>'Male','0'=>'Female'),
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

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'birth'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'birth'); ?>
						<?php echo $form->textField($model,'birth',array('class'=>'form-control')); ?>
					</div>

				</div>  

				
				<div class="form-group">

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'email'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'email'); ?>
						<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
					</div>

				</div>  

				
				<div class="form-group">

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'username'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'username'); ?>
						<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
					</div>

				</div>  

				
				<div class="form-group">

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'level'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'level'); ?>
						<?php
						echo $form->radioButtonList($model,'level',
							array('1'=>'Superadmin','2'=>'Admin'),
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

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'division'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'division'); ?>
							<?php
							echo $form->radioButtonList($model,'division',
								array('1'=>'IT','2'=>'Marketing'),
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
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
						</div>
					</div>

					<?php $this->endWidget(); ?>

</div></div><!-- form -->