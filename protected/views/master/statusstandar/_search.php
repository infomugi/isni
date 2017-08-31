<?php
/* @var $this Status StandarController */
/* @var $model Status Standar */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'KD_KATEGORI'); ?>
			<?php echo $form->textField($model,'KD_KATEGORI',array('size'=>5,'maxlength'=>5)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'NM_KATEGORI1'); ?>
			<?php echo $form->textField($model,'NM_KATEGORI1',array('size'=>60,'maxlength'=>75)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'NM_KATEGORI2'); ?>
			<?php echo $form->textField($model,'NM_KATEGORI2',array('size'=>60,'maxlength'=>75)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->