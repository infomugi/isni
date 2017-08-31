<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'MULTIMEDIA_ID'); ?>
		<?php echo $form->textField($model,'MULTIMEDIA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_DATE'); ?>
		<?php echo $form->textField($model,'FILE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_TYPE'); ?>
		<?php echo $form->textField($model,'FILE_TYPE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILE_NAME'); ?>
		<?php echo $form->textField($model,'FILE_NAME',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_DATE'); ?>
		<?php echo $form->textField($model,'C_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_UID'); ?>
		<?php echo $form->textField($model,'C_UID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'M_DATE'); ?>
		<?php echo $form->textField($model,'M_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'M_UID'); ?>
		<?php echo $form->textField($model,'M_UID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->