<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KD_LIST_KATEGORI'); ?>
		<?php echo $form->textField($model,'KD_LIST_KATEGORI',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_LIST_KATEGORI1'); ?>
		<?php echo $form->textField($model,'NM_LIST_KATEGORI1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NM_LIST_KATEGORI2'); ?>
		<?php echo $form->textField($model,'NM_LIST_KATEGORI2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_bidang'); ?>
		<?php echo $form->textField($model,'kd_bidang',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->