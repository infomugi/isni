<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-10 col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bukutamu-form',
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
					<?php echo $form->labelEx($model,'NAMA'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'NAMA'); ?>
					<?php echo $form->textField($model,'NAMA',array('class'=>'form-control','value'=>lcfirst(YII::app()->user->name),'readOnly'=>true)); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'EMAIL'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'EMAIL'); ?>
					<?php echo $form->textField($model,'EMAIL',array('class'=>'form-control','value'=>lcfirst(YII::app()->user->record->Email),'readOnly'=>true)); ?>
				</div>

			</div>  			


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'KOTA'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KOTA'); ?>
					<?php echo $form->textField($model,'KOTA',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'HOMEPAGE'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'HOMEPAGE'); ?>
					<?php echo $form->textField($model,'HOMEPAGE',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'KOMENTAR'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'KOMENTAR'); ?>
					<?php echo $form->textArea($model,'KOMENTAR',array('class'=>'form-control')); ?>
				</div>

			</div>   

			<div class="form-group">
				<div class="col-md-8">  
				</div>
				<div class="col-md-4">  
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->