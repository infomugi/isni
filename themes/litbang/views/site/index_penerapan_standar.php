<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */

$this->breadcrumbs=array(
	'Penerapan Snis'=>array('index'),
	'Manage',
	);

$this->pageTitle='Penerapan Standar';
?>


<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
</div>
<!--BANNER END-->
<div class="kode-content padding-tb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'penerapan-sni-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						array('name'=>'no_nspm','value'=>'$data->no_nspm'),
						array('name'=>'id_inspeksi_teknis','value'=>'$data->InspeksiTeknis->nm_inspeksi_teknis'),
						array('name'=>'id_regulasi_teknis','value'=>'$data->RegulasiTeknis->nm_regulasi_teknis'),
							// array('name'=>'id_provinsi','value'=>'$data->Provinsi->nama'),
						array('name'=>'id_lab','value'=>'$data->LabPenerapan->nm_lab_penerapan'),

							/*
							'advis_teknis',
							'spesifikasi_produk',
							'instansi_pengguna',
							'konsultan',
							'lokasi_proyek',
							'nama_proyek',
							'ruas_jalan',
							'kab_kota',
							'biaya_perencanaan',
							'tahun_anggaran',
							*/
							
							),
							)); ?>


						</div>
					</div>
				</div>
			</div>
