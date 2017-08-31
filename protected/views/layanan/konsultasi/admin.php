<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */

$this->breadcrumbs=array(
	'Konsultasis'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Konsultasi';
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

			<?php echo CHtml::link('Tambah Konsultasi',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Konsultasi',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'konsultasi-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'tanggal_konsultasi',
							array('name'=>'topik','value'=>'Konsultasi::model()->type($data->topik)'),
							'judul',

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>


