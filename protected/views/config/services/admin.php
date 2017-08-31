<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Services';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Services',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List Services',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'services-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						// 'id_services',
						'name',
						// 'icon',
						'description',
						// 'status',
						array(
							'header'=>'Action',
							'template'=>'{view}{update}',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>
						
					</section>