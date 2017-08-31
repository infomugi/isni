<?php
/* @var $this SniController */
/* @var $model Sni */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_standar'); ?>
		<?php echo $form->textField($model,'id_standar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_nspm'); ?>
		<?php echo $form->textField($model,'no_nspm',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_bidang'); ?>
		<?php echo $form->textField($model,'kd_bidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_subbidang'); ?>
		<?php echo $form->textField($model,'kd_subbidang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_jenisstandar'); ?>
		<?php echo $form->textField($model,'kd_jenisstandar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruanglingkup'); ?>
		<?php echo $form->textArea($model,'ruanglingkup',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_hal'); ?>
		<?php echo $form->textField($model,'jumlah_hal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_ics'); ?>
		<?php echo $form->textField($model,'kd_ics'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_padanan'); ?>
		<?php echo $form->textField($model,'kd_padanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_pemrakarsa'); ?>
		<?php echo $form->textField($model,'kd_pemrakarsa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_konseptor'); ?>
		<?php echo $form->textField($model,'kd_konseptor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_isi'); ?>
		<?php echo $form->textField($model,'file_isi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_ringkasan'); ?>
		<?php echo $form->textField($model,'file_ringkasan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'download'); ?>
		<?php echo $form->textField($model,'download'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_ics'); ?>
		<?php echo $form->textField($model,'no_ics',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'padanan'); ?>
		<?php echo $form->textField($model,'padanan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pemrakarsa'); ?>
		<?php echo $form->textField($model,'pemrakarsa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'konseptor'); ?>
		<?php echo $form->textField($model,'konseptor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->