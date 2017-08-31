<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-11 col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'konsultasi-form',
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

				<div class="col-sm-2 control-label">
					<?php echo $form->labelEx($model,'topik'); ?>
				</div>   

				<div class="col-sm-10">
					<?php echo $form->error($model,'topik'); ?>
					<?php echo $form->dropDownlist($model,'topik',array('1'=>'Standar SNI','2'=>'Pedoman Teknis','3'=>'Petunjuk Teknis'),array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-2 control-label">
					<?php echo $form->labelEx($model,'judul'); ?>
				</div>   

				<div class="col-sm-10">
					<?php echo $form->error($model,'judul'); ?>
					<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-2 control-label">
					<?php echo $form->labelEx($model,'deskripsi'); ?>
				</div>   

				<div class="col-sm-10">
					<?php echo $form->error($model,'deskripsi'); ?>
					<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
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