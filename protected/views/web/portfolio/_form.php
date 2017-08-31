<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'portfolio-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'name'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'description'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'description'); ?>
					<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'image'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'image'); ?>
					<?php echo $form->fileField($model,'image',array('class'=>'btn btn-info')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'category_id'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'category_id'); ?>
					<?php 
					echo $form->dropDownList($model, "category_id",
						CHtml::listData(Tag::model()->findAll(array('condition'=>'category_id=1')),
							'id_category_sub', 'name'
							),
						array("empty"=>"-- Kategori --", 'class'=>'select2 form-control')
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