<?php
/* @var $this Regulasi TeknisController */
/* @var $model Regulasi Teknis */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id'); ?>
			<?php echo $form->textField($model,'id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'nm_regulasi_teknis'); ?>
			<?php echo $form->textField($model,'nm_regulasi_teknis',array('size'=>60,'maxlength'=>255)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->