<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama'); ?>
		<?php echo $form->textField($model,'Nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Alamat'); ?>
		<?php echo $form->textField($model,'Alamat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_kabupaten_kota'); ?>
		<?php echo $form->textField($model,'Id_kabupaten_kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_jenis_pekerjaan'); ?>
		<?php echo $form->textField($model,'Id_jenis_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_bidang_pekerjaan'); ?>
		<?php echo $form->textField($model,'Id_bidang_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_tujuan'); ?>
		<?php echo $form->textField($model,'Id_tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama_instansi'); ?>
		<?php echo $form->textField($model,'Nama_instansi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_name'); ?>
		<?php echo $form->textField($model,'User_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Flag_register'); ?>
		<?php echo $form->textField($model,'Flag_register',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_simpul'); ?>
		<?php echo $form->textField($model,'Id_simpul'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal_entry'); ?>
		<?php echo $form->textField($model,'Tanggal_entry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_entry'); ?>
		<?php echo $form->textField($model,'User_entry',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->