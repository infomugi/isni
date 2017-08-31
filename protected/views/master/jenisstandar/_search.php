<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KD_JENIS_STANDAR'); ?>
		<?php echo $form->textField($model,'KD_JENIS_STANDAR',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_JENIS_STANDAR1'); ?>
		<?php echo $form->textField($model,'NM_JENIS_STANDAR1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_JENIS_STANDAR2'); ?>
		<?php echo $form->textField($model,'NM_JENIS_STANDAR2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->