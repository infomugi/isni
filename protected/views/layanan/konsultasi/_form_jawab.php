<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */
/* @var $form CActiveForm */
?>



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

	<?php echo $form->errorSummary($jawaban, null, null, array('class' => 'alert alert-warning')); ?>



	<div class="form-group">

		<div class="col-sm-12">
			<?php echo $form->error($jawaban,'jawaban'); ?>
			<?php echo $form->textArea($jawaban,'jawaban',array('class'=>'form-control')); ?>
		</div>

	</div>  

	<div class="form-group">
		<div class="col-md-12">  
			<?php echo CHtml::submitButton($jawaban->isNewRecord ? 'Submit' : 'Jawab', array('class' => 'btn btn-info btn-flat pull-right')); ?>
		</div>
	</div>

	<?php $this->endWidget(); ?>
