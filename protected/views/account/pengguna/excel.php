<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Export Pengguna SNI ke Excel';
?>
<section class="col-xs-12">
    <div class="alert alert-success"><i class="fa fa-file-excel-o"></i> Export Dokumen Pengguna SNI ke Excel, Berhasil <a href="/sni/Rekapitulasi Pengguna SIMSTAN.xls">Download</a> </div>
    </section>
    
	<?php 
	$this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => 'Rekapitulasi Pengguna SIMSTAN.xls',
	'columns'=>array(

        'Nama'
        // 'Nama_instansi',
        // 'Email',
        // 'Alamat',
        // array('name'=>'Id_kabupaten_kota',
        // 'value'=>'$data->Kota->nama',
        // ),
        // array('name'=>'Id_jenis_pekerjaan',
        // 'value'=>'$data->Jenis->JenisPekerjaan',
        // ),
        // array('name'=>'Id_bidang_pekerjaan',
        // 'value'=>'$data->Bidang->BidangPekerjaan',
        // ),
        // array('name'=>'Id_tujuan',
        // 'value'=>'$data->Tujuan->Tujuan',
        // ),
							

		),
		)); 
		?>