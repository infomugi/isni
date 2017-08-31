<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_FAQ'); ?>
		<?php echo $form->textField($model,'ID_FAQ',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANYA'); ?>
		<?php echo $form->textField($model,'TANYA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JAWAB'); ?>
		<?php echo $form->textField($model,'JAWAB',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLBUAT'); ?>
		<?php echo $form->textField($model,'TGLBUAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'URL_GBR'); ?>
		<?php echo $form->textField($model,'URL_GBR',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KET_GBR'); ?>
		<?php echo $form->textField($model,'KET_GBR',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->