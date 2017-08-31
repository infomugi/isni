<?php
/* @var $this KomentarController */
/* @var $model Komentar */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'komentar-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-warning',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<div class="form-group">

				<div class="col-sm-12">
					<?php echo $form->error($komentar,'deskripsi'); ?>
					<?php echo $form->textArea($komentar,'deskripsi',array('class'=>'form-control','placeHolder'=>'Komentar...')); ?>
				</div>

			</div>  


			<div class="form-group">
				<div class="col-md-8">
				</div>  
				<div class="col-md-4">  
					<?php echo CHtml::submitButton($komentar->isNewRecord ? 'Kirim' : 'Edit', array('class' => 'btn btn-primary pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->