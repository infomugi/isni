<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Contact';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Contact',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Contact',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'contact-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_contact',
		'created_date',
		'fullname',
		'email',
		'title',
		'description',
		/*
		'view',
		'status',
		*/
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>