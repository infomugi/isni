<?php
/* @var $this SosialisasiController */
/* @var $model Sosialisasi */
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
		<?php echo $form->label($model,'nm_materi'); ?>
		<?php echo $form->textField($model,'nm_materi',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nm_file'); ?>
		<?php echo $form->textField($model,'nm_file',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_input'); ?>
		<?php echo $form->textField($model,'tgl_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_input'); ?>
		<?php echo $form->textField($model,'user_input',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->