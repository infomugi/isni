<?php
/* @var $this IstilahController */
/* @var $model Istilah */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_istilah'); ?>
		<?php echo $form->textField($model,'id_istilah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'istilah'); ?>
		<?php echo $form->textField($model,'istilah',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'definisi'); ?>
		<?php echo $form->textField($model,'definisi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bidang'); ?>
		<?php echo $form->textField($model,'id_bidang',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_id'); ?>
		<?php echo $form->textField($model,'no_id',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->