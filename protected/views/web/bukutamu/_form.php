<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

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
					<?php echo $form->textField($model,'NAMA',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'EMAIL'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'EMAIL'); ?>
					<?php echo $form->textField($model,'EMAIL',array('class'=>'form-control')); ?>
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

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'balasan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'balasan'); ?>
					<?php echo $form->textArea($model,'balasan',array('class'=>'form-control')); ?>
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