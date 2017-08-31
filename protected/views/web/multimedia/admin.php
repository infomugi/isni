<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */

$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Multimedia';
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

			<?php echo CHtml::link('Tambah Multimedia',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Multimedia',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'multimedia-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'MULTIMEDIA_ID',
							'TITLE',
							// 'DESCRIPTION',
							// 'FILE_DATE',
							'FILE_TYPE',
							'FILE_NAME',
		/*
		'STATUS',
		'C_DATE',
		'C_UID',
		'M_DATE',
		'M_UID',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			),
		),
		)); ?>


