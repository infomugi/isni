<?php
/* @var $this PadananController */
/* @var $model Padanan */

$this->breadcrumbs=array(
	'Tb Padanans'=>array('index'),
	$model->KD_PADANAN,
	);

	$this->pageTitle='Detail Padanan';
	?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Padanan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Padanan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Padanan'));
		 ?>
		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
	 array('update', 'id'=>$model->KD_PADANAN,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Padanan'));
 ?>
		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
	 array('delete', 'id'=>$model->KD_PADANAN,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Padanan'));
 ?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Add Padanan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-primary btn-flat', 'title'=>'List Padanan'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-primary btn-flat','title'=>'Manage Padanan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->KD_PADANAN,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Padanan'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->KD_PADANAN,
		),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Padanan'));
 ?>

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
					'KD_PADANAN',
		'NO_PADANAN',
		'DESKRIPSI',
			),
			)); ?>

		<STYLE>
			th{width:150px;}
		</STYLE>

