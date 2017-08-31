<?php
/* @var $this Sub Panitia TeknisController */
/* @var $model Sub Panitia Teknis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KD_SUBPATEK'); ?>
		<?php echo $form->textField($model,'KD_SUBPATEK',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KD_PATEK'); ?>
		<?php echo $form->textField($model,'KD_PATEK',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_SUBPATEK'); ?>
		<?php echo $form->textField($model,'NM_SUBPATEK',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JAWAB'); ?>
		<?php echo $form->textField($model,'JAWAB',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODE_SUBPATEK'); ?>
		<?php echo $form->textField($model,'KODE_SUBPATEK',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->