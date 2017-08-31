<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Standar';
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

			<?php echo CHtml::link('Tambah Standar',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Standar',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'standar-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'NO_NSPM',
							'JUDUL1',
		/*
		'NO_ID',
		'TH_PENYUSUNAN',
		'KD_GUGUS',
		'KD_DANA',
		'KD_BIDANG',
		'KD_LIST_KATEGORI',
		'KD_JENIS_STANDAR',
		'KD_PADANAN',
		'TGL_USUL',
		'TGL_RSNI1',
		'TGL_RSNI2',
		'TGL_RSNI3',
		'TGL_RSNI4',
		'NO_KEPBSN',
		'TG_KEPBSN',
		'KD_STATUS_STANDAR',
		'kd_jenisstatus',
		'KD_STATUS_NSPM',
		'RUANG1',
		'NO_RSNI',
		'NO_NSPM_REV',
		'BERLAKU',
		'TGL_PANTEK',
		'LOG_REVISI',
		'TGL_SAVE',
		'TGL_UPDATE',
		'USER_ID',
		'KD_SUBPATEK',
		'KD_PATEK',
		'KD_UNIT',
		'LP_perencanAan',
		'LP_desain',
		'LP_kontruksi',
		'lp_om',
		'tgl_bsn',
		'tgl_usulbsn',
		'jmlhal',
		'tgl_input',
		'no_revisi',
		'status_rev',
		'NO_ICS',
		'statusws',
		'statustek',
		'd_acuan',
		'd_pendamping',
		'd_terkait',
		'kd_statuspaten',
		'no_paten',
		'tgl_pengajuan',
		'jangka_waktu',
		'tahap_usulan',
		'status_pnps',
		'tahap_konsep',
		'tahap_rpt_teknis1',
		'tahap_rpt_teknis2',
		'tahap_rpt_konsensus',
		'tahap_rpt_pantek',
		'tahap_usulan_menteri',
		'tahap_usulan_bsn',
		'tahap_jajak_pendapat',
		'tahap_ebaloting',
		'revisi_dari_spm',
		'tgl_konsep',
		'tgl_rpt_teknis1',
		'tgl_rpt_teknis2',
		'tgl_rpt_konsensus',
		'tgl_rpt_pantek',
		'tgl_usulan_thp_menteri',
		'tgl_usulan_thp_bsn',
		'tgl_jajak_pendapat',
		'tgl_ebaloting',
		'thn_penetapan_rsni',
		'no_kepmen_rsni',
		'kd_kat_standar_konsep',
		'no_nspm_konsep',
		'ket_jajak_pendapat',
		'no_sk_abolisi',
		'konseptor',
		'regulasi',
		'kesepakatan_regional',
		'kebutuhan_pasar',
		'pertimbangan_lain',
		'strata_penggunaan_sni',
		'penelitian',
		'std_non_internasional',
		'tgl_usulan_menteri',
		'ket_ebaloting',
		'd_ics',
		'd_sni_revisi',
		'd_stdacuan',
		'd_bibliografi',
		'file_isi',
		'file_ringkasan',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			),
		),
		)); ?>


