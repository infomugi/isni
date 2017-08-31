<?php
/* @var $this Jenis PekerjaanController */
/* @var $model Jenis Pekerjaan */

$this->breadcrumbs=array(
	'Jenis Pekerjaans'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Jenis Pekerjaan';
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

			<?php echo CHtml::link('Tambah Jenis Pekerjaan',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Jenis Pekerjaan',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'jenis-pekerjaan-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'Id',
							'JenisPekerjaan',
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>


