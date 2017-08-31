<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Export Dokumen SNI ke Excel';
?>
<section class="col-xs-12">
    <div class="alert alert-success"><i class="fa fa-file-excel-o"></i> Export Dokumen SNI ke Excel, Berhasil <a href="/sni/Rekapitulasi Daftar Dokumen SNI.xls">Download</a> </div>
    </section>
    
	<?php 
	$this->widget('EExcelWriter', array(
	'dataProvider'=>$dataProvider,
	'title' => 'EExcelWriter',
	'stream' => FALSE,
	'fileName' => 'Rekapitulasi Daftar Dokumen SNI.xls',
	'columns'=>array(

		'no_nspm',
		'judul',

		array(
			'name'=>'kd_statusstandar',
			'value'=>'$data->StatusStandar->NM_KATEGORI1'
			),							

		array(
			'name'=>'tahun',
			'value'=>'$data->tahun'
			),							

		array(
			'name'=>'kd_jenisstandar',
			'value'=>'$data->JenisStandar->NM_JENIS_STANDAR1'
			),	

		array(
			'name'=>'kd_bidang',
			'value'=>'$data->Bidang->nm_bidang'
			),
			
		array(
			'header'=>'File Isi',
			'value'=>'Sni::model()->status($data->status_isi)'
			),	

		),
		)); 
		?>