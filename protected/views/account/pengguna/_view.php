<?php
/* @var $this PenggunaController */
/* @var $data Pengguna */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->Nama), array('view', 'id'=>$data->Id)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php 
				$this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'Nama',
						'Email',
						'Alamat',
						array('name'=>'Id_kabupaten_kota','value'=>$data->Kota->nama),
						array('name'=>'Id_jenis_pekerjaan','value'=>$data->Jenis->JenisPekerjaan),
						array('name'=>'Id_bidang_pekerjaan','value'=>$data->Bidang->BidangPekerjaan),
						array('name'=>'Id_tujuan','value'=>$data->Tujuan->Tujuan),
						'Nama_instansi',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
