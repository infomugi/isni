<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Sni';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('<i class="fa fa-plus-circle"></i> Tambah Sni',
		array('create'),
		array('class' => 'btn btn-info btn-flat'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i> Daftar Sni',
			array('index'),
			array('class' => 'btn btn-info btn-flat'));
			?>
			
		<?php echo CHtml::link('<i class="fa fa-file-excel-o"></i> Export Excel',
			array('excel'),
			array('class' => 'btn btn-success pull-right btn-flat'));
			?>		

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'sni-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),
								
                        array(   
                             'header'=>'File',
                             'type'=>'raw',
                             'value'=>'CHtml::link("Upload", array("/sni/new/sni/uploadisi/id/$data->id_standar"))',
                        ),								

						// 'id_standar',
						'no_nspm',
						'judul',

						array(
							'filter'=>CHtml::listData(Statusstandar::model()->findAll(),'KD_KATEGORI','NM_KATEGORI1'),
							'name'=>'kd_statusstandar',
							'value'=>'$data->StatusStandar->NM_KATEGORI1'
							),							

						// array(
						// 	'name'=>'tahun',
						// 	'value'=>'$data->tahun'
						// 	),							

						array(
							'filter'=>CHtml::listData(Jenisstandar::model()->findAll(),'KD_JENIS_STANDAR','NM_JENIS_STANDAR1'),
							'name'=>'kd_jenisstandar',
							'value'=>'$data->JenisStandar->NM_JENIS_STANDAR1'
							),	

						array(
							'filter'=>CHtml::listData(Bidang::model()->findAll(),'kd_bidang','nm_bidang'),
							'name'=>'kd_bidang',
							'value'=>'$data->Bidang->nm_bidang'
							),
							
						array(
							'header'=>'File Isi',
							'value'=>'Sni::model()->status($data->status_isi)'
							),	
							
						array(
							'header'=>'File Ringkasan',
							'value'=>'Sni::model()->status($data->status_ringkasan)'
							),								

						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'template'=>'{view}{update}',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>
						
					</section>
					
				