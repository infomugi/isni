<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Pengguna';
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

			<?php echo CHtml::link('Tambah Pengguna',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Pengguna',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>
					
                    <?php echo CHtml::link('<i class="fa fa-file-excel-o"></i> Export Excel',
            			array('excel'),
            			array('class' => 'btn btn-success pull-right btn-flat'));
            			?>	

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'pengguna-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'Nama',
				// 			'Email',
				//          'Alamat',
				// 			array('name'=>'Id_kabupaten_kota',
				// 				'value'=>'$data->Kota->nama',
				// 				'filter'=>CHtml::listData(Kota::model()->findAll(),'kode_kota','nama')
				// 				),
							array('name'=>'Id_jenis_pekerjaan',
								'value'=>'$data->Jenis->JenisPekerjaan',
								'filter'=>CHtml::listData(Jenispekerjaan::model()->findAll(),'Id','JenisPekerjaan')
								),
							array('name'=>'Id_bidang_pekerjaan',
								'value'=>'$data->Bidang->BidangPekerjaan',
								'filter'=>CHtml::listData(Bidangpekerjaan::model()->findAll(),'Id','BidangPekerjaan')
								),
							array('name'=>'Id_tujuan',
								'value'=>'$data->Tujuan->Tujuan',
								'filter'=>CHtml::listData(Tujuanregister::model()->findAll(),'Id','Tujuan')
								),
							// 'Nama_instansi',

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>


