<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_konsultasi'); ?>
		<?php echo $form->textField($model,'id_konsultasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_konsultasi'); ?>
		<?php echo $form->textField($model,'tanggal_konsultasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pengguna_id'); ?>
		<?php echo $form->textField($model,'pengguna_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topik'); ?>
		<?php echo $form->textField($model,'topik',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_jawab'); ?>
		<?php echo $form->textField($model,'tanggal_jawab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jawaban'); ?>
		<?php echo $form->textArea($model,'jawaban',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->