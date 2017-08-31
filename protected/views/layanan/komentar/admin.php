<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Komentar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-md'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('List Komentar',
			array('index'),
			array('class' => 'btn btn-primary btn-flat'));
			?>

		</span>	

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'komentar-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					// 'id_komentar',
					'tanggal_komentar',
					array('name'=>'pengguna_id','value'=>'$data->Pengguna->Nama'),
					// array('name'=>'standar_id','value'=>'$data->Standar->NO_KEPBSN'),
					'deskripsi',
					/*
					'tanggal_jawab',
					'admin_id',
					'jawaban',
					'status',
					'like',
					'unlike',
					*/
					array(
						'class'=>'CButtonColumn',
						'template'=>'{view}',
						),
					),
					)); ?>


