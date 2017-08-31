<?php
/* @var $this PadananController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Padanans',
	);

	$this->pageTitle='List Padanan';
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

	</span>

	<HR>

		<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		)); ?>

