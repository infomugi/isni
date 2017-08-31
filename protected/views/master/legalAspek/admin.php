<?php
/* @var $this Legal AspekController */
/* @var $model Legal Aspek */

$this->breadcrumbs=array(
	'Legal Aspeks'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Legal Aspek';
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

			<?php echo CHtml::link('Tambah Legal Aspek',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Legal Aspek',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'legal-aspek-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'id',
							'legal_aspek',
							'nomor',
							'tanggal',
							'tentang',
							// 'tgl_input',
		/*
		'user_input',
		'nm_file',
		'muatan',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			),
		),
		)); ?>


