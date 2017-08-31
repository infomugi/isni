<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'tb-list-kategori-form',
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
					<?php echo $form->labelEx($model,'KD_LIST_KATEGORI'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KD_LIST_KATEGORI'); ?>
					<?php echo $form->textField($model,'KD_LIST_KATEGORI',array('class'=>'form-control')); ?>
				</div>
				
			</div>  


			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kd_bidang'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kd_bidang'); ?>
					<?php 
					echo $form->dropDownList($model, "kd_bidang",
						CHtml::listData(Bidang::model()->findAll(),
							'kd_bidang', 'nm_bidang'
							),
						array("empty"=>"-- Bidang --", 'class'=>'select2 form-control')
						); 
						?> 
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'NM_LIST_KATEGORI1'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'NM_LIST_KATEGORI1'); ?>
						<?php echo $form->textField($model,'NM_LIST_KATEGORI1',array('class'=>'form-control')); ?>
					</div>
					
				</div>  

				
				<div class="form-group">
					
					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'NM_LIST_KATEGORI2'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'NM_LIST_KATEGORI2'); ?>
						<?php echo $form->textField($model,'NM_LIST_KATEGORI2',array('class'=>'form-control')); ?>
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