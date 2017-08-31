<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */

$this->breadcrumbs=array(
	'Jenis Standars'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Jenis Standar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Tambah Jenis Standar',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Jenis Standar',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'jenis-standar-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'NM_JENIS_STANDAR1',
							
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>


