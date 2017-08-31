<?php
/* @var $this PadananController */
/* @var $model Padanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KD_PADANAN'); ?>
		<?php echo $form->textField($model,'KD_PADANAN',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_PADANAN'); ?>
		<?php echo $form->textField($model,'NO_PADANAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESKRIPSI'); ?>
		<?php echo $form->textField($model,'DESKRIPSI',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->