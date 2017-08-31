<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_kuesioner'); ?>
		<?php echo $form->textField($model,'id_kuesioner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kuesioner'); ?>
		<?php echo $form->textField($model,'tanggal_kuesioner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_1'); ?>
		<?php echo $form->textField($model,'soal_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_2'); ?>
		<?php echo $form->textField($model,'soal_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_3'); ?>
		<?php echo $form->textField($model,'soal_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_4'); ?>
		<?php echo $form->textField($model,'soal_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_5'); ?>
		<?php echo $form->textField($model,'soal_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_6'); ?>
		<?php echo $form->textField($model,'soal_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_7'); ?>
		<?php echo $form->textField($model,'soal_7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_8'); ?>
		<?php echo $form->textField($model,'soal_8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_9'); ?>
		<?php echo $form->textField($model,'soal_9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_10'); ?>
		<?php echo $form->textField($model,'soal_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_11'); ?>
		<?php echo $form->textField($model,'soal_11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_12'); ?>
		<?php echo $form->textField($model,'soal_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_13'); ?>
		<?php echo $form->textField($model,'soal_13'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_14'); ?>
		<?php echo $form->textField($model,'soal_14'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soal_15'); ?>
		<?php echo $form->textField($model,'soal_15'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
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