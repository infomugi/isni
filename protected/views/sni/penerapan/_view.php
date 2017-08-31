<?php
/* @var $this Penerapan SNIController */
/* @var $data Penerapan SNI */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id',
		'no_nspm',
		'id_inspeksi_teknis',
		'id_regulasi_teknis',
		'advis_teknis',
		'spesifikasi_produk',
		'id_provinsi',
		'id_lab',
		'instansi_pengguna',
		'konsultan',
		'lokasi_proyek',
		'nama_proyek',
		'ruas_jalan',
		'kab_kota',
		'biaya_perencanaan',
		'tahun_anggaran',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
