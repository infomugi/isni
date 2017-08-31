<?php
/* @var $this Gugus KerjaController */
/* @var $model Gugus Kerja */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'Gugus Kerja-form',
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
					<?php echo $form->labelEx($model,'KD_GUGUS'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KD_GUGUS'); ?>
					<?php echo $form->textField($model,'KD_GUGUS',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'KD_SUBPATEK'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KD_SUBPATEK'); ?>
					<?php 
					echo $form->dropDownList($model, "KD_SUBPATEK",
						CHtml::listData(Subpatek::model()->findAll(),
							'KD_SUBPATEK', 'NM_SUBPATEK'
							),
						array("empty"=>"-- Sub Panitia Teknis --", 'class'=>'select2 form-control')
						); 
						?> 							
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'NM_GUGUS'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'NM_GUGUS'); ?>
						<?php echo $form->textField($model,'NM_GUGUS',array('class'=>'form-control')); ?>
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