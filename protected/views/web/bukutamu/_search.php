<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTA'); ?>
		<?php echo $form->textField($model,'KOTA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOMEPAGE'); ?>
		<?php echo $form->textField($model,'HOMEPAGE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOMENTAR'); ?>
		<?php echo $form->textField($model,'KOMENTAR',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IP'); ?>
		<?php echo $form->textField($model,'IP',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLPOST'); ?>
		<?php echo $form->textField($model,'TGLPOST'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balasan'); ?>
		<?php echo $form->textArea($model,'balasan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_message'); ?>
		<?php echo $form->textField($model,'no_message'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->