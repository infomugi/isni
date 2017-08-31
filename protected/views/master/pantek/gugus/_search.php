<?php
/* @var $this Gugus KerjaController */
/* @var $model Gugus Kerja */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'KD_GUGUS'); ?>
			<?php echo $form->textField($model,'KD_GUGUS',array('size'=>5,'maxlength'=>5)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'KD_SUBPATEK'); ?>
			<?php echo $form->textField($model,'KD_SUBPATEK',array('size'=>5,'maxlength'=>5)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'NM_GUGUS'); ?>
			<?php echo $form->textField($model,'NM_GUGUS',array('size'=>60,'maxlength'=>75)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->