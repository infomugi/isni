<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_nspm'); ?>
		<?php echo $form->textField($model,'no_nspm',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inspeksi_teknis'); ?>
		<?php echo $form->textField($model,'id_inspeksi_teknis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_regulasi_teknis'); ?>
		<?php echo $form->textField($model,'id_regulasi_teknis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'advis_teknis'); ?>
		<?php echo $form->textField($model,'advis_teknis',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spesifikasi_produk'); ?>
		<?php echo $form->textField($model,'spesifikasi_produk',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_provinsi'); ?>
		<?php echo $form->textField($model,'id_provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_lab'); ?>
		<?php echo $form->textField($model,'id_lab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instansi_pengguna'); ?>
		<?php echo $form->textField($model,'instansi_pengguna',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konsultan'); ?>
		<?php echo $form->textField($model,'konsultan',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi_proyek'); ?>
		<?php echo $form->textField($model,'lokasi_proyek',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_proyek'); ?>
		<?php echo $form->textField($model,'nama_proyek',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruas_jalan'); ?>
		<?php echo $form->textField($model,'ruas_jalan',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kab_kota'); ?>
		<?php echo $form->textField($model,'kab_kota',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya_perencanaan'); ?>
		<?php echo $form->textField($model,'biaya_perencanaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_anggaran'); ?>
		<?php echo $form->textField($model,'tahun_anggaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->