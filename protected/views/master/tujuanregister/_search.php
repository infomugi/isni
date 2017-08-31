<?php
/* @var $this Tujuan RegisterController */
/* @var $model Tujuan Register */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'Id'); ?>
			<?php echo $form->textField($model,'Id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'Tujuan'); ?>
			<?php echo $form->textField($model,'Tujuan',array('size'=>60,'maxlength'=>250)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->