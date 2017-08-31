<?php
/* @var $this Jenis StatusController */
/* @var $model Jenis Status */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'KD_JENISSTATUS'); ?>
			<?php echo $form->textField($model,'KD_JENISSTATUS',array('size'=>2,'maxlength'=>2)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'NM_JENISSTATUS'); ?>
			<?php echo $form->textField($model,'NM_JENISSTATUS',array('size'=>50,'maxlength'=>50)); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->