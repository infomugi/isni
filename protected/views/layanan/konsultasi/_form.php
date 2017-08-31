<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

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

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'topik'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'topik'); ?>
					<?php echo $form->textField($model,'topik',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'judul'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'judul'); ?>
					<?php echo $form->textField($model,'judul',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'deskripsi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'deskripsi'); ?>
					<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggal_jawab'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggal_jawab'); ?>
					<?php echo $form->textField($model,'tanggal_jawab',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'admin_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'admin_id'); ?>
					<?php echo $form->textField($model,'admin_id',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jawaban'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jawaban'); ?>
					<?php echo $form->textArea($model,'jawaban',array('class'=>'form-control')); ?>
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