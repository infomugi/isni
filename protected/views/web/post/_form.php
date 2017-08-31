<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),
	'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
	)); ?>

	<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

	<div class="form-group row">
		<div class="col-sm-12">
			<?php echo $form->error($model,'title'); ?>
			<?php echo $form->textField($model,'title',array('class'=>'form-control input-lg','placeHolder'=>'Judul Berita')); ?>
		</div>
	</div>  


	<div class="form-group row">
		<div class="col-sm-12">
			<?php echo $form->error($model,'description'); ?>
			<?php echo $form->textArea($model,'description',array('class'=>'summernote','placeHolder'=>'Description')); ?>
		</div>
	</div>  


	<div class="form-group row">
		<div class="col-sm-6">
			<?php echo $form->error($model,'image'); ?>
			<?php echo $form->fileField($model,'image',array('id'=>'fileupload','class'=>'btn btn-info')); ?>
		</div>
		<div class="col-sm-3">
			<?php echo $form->error($model,'id_category'); ?>

			<?php 
			echo $form->dropDownList($model, "id_category",
				CHtml::listData(Category::model()->findAll(array('condition'=>'status = 1','order'=>'name ASC')),
					'id_category', 'name'
					),
				array(
					'prompt'=>'-- Kategori --.',
					'class'=>'form-control select2',
					'ajax' => array(
						'type'=>'POST', 
						'url'=>Yii::app()->createUrl('web/tag/sub'), 
						'update'=>'#Post_id_tag', 
						'data'=>array('id_tag'=>'js:this.value'),
						))
				); 
				?> 										
			</div>
			<div class="col-sm-3">
				<?php echo $form->error($model,'id_tag'); ?>
				<?php echo $form->dropDownList($model, "id_tag",
					array(),
					array("empty"=>"-- Tag --", 'class'=>'form-control select2')
					); ?> 
				</div>									
			</div>  
			
			<div class="form-group row">
				<div class="col-sm-6">
					<?php echo $form->error($model,'tags'); ?>
					<?php echo $form->textArea($model,'tags',array('class'=>'form-control','placeHolder'=>'Kata Kunci')); ?>
				</div>

				<div class="col-sm-6">
					<?php echo $form->error($model,'keyword'); ?>
					<?php echo $form->textArea($model,'keyword',array('class'=>'form-control','placeHolder'=>'Deskripsi Singkat')); ?>
				</div>
			</div>  


			<div class="form-group row">
				<div class="col-md-12">  
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Publikasikan' : 'Perbaharui', array('class' => 'btn btn-info pull-right waves-light')); ?>
				</div>
			</div>




			<?php $this->endWidget(); ?>



