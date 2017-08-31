<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>
<div class="form-normal form-horizontal clearfix">
	<div class="col-xs-12">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>

			<div class="form-group">
				<?php echo $form->error($model,'fullname'); ?>
				<?php echo $form->textField($model,'fullname',array('class'=>'form-control','placeholder'=>'Nama Lengkap')); ?>
			</div>  


			<div class="form-group">
				<?php echo $form->error($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'Email')); ?>
			</div>  

			<div class="form-group">
				<?php echo $form->error($model,'title'); ?>
				<?php echo $form->textField($model,'title',array('class'=>'form-control','placeholder'=>'Perihal')); ?>
			</div>  

			<div class="form-group">
				<?php echo $form->error($model,'description'); ?>
				<?php echo $form->textArea($model,'description',array('class'=>'form-control','placeholder'=>'Pesan..')); ?>
			</div>  

			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim' : 'Edit', array('class' => 'btn btn-border btn-rounded m-0 pull-right')); ?>
			</div>

			<?php $this->endWidget(); ?>

</div>
</div><!-- form -->