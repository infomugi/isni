<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	$model->NO_ID,
	);

$this->pageTitle='Detail Standar - '.$model->NO_ID;
?>

<span class="visible-xs">

<!-- 	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Standar'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Standar'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Standar'));
				?> -->
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('uploadisi', 'id'=>$model->NO_ID,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Standar'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('uploadringkasan', 'id'=>$model->NO_ID,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Standar'));
								?>

							</span> 

							<span class="hidden-xs">

<!-- 								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Standar'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Standar'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Standar'));
											?> -->
											<?php echo CHtml::link('<i class="fa fa-arrow-left"></i>',
												array('admin'),
												array('class' => 'btn btn-primary btn-flat','title'=>'Manage Standar'));
												?>
												<?php echo CHtml::link('Edit', 
													array('update', 'id'=>$model->NO_ID,
														), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Standar'));
														?>

														<?php echo CHtml::link('Delete', 
															array('delete', 'id'=>$model->NO_ID,
																),  array('class' => 'btn btn-danger btn-flat pull-right', 'title'=>'Hapus Standar'));
																?>

																<?php echo CHtml::link('<i class="fa fa-upload"></i> File Isi', 
																	array('uploadisi', 'id'=>$model->NO_ID,
																		), array('class' => 'btn btn-warning btn-flat', 'title'=>'Upload File Isi'));
																		?>

																		<?php echo CHtml::link('<i class="fa fa-upload"></i> File Ringkasan', 
																			array('uploadringkasan', 'id'=>$model->NO_ID,
																				), array('class' => 'btn btn-warning btn-flat', 'title'=>'Upload File Ringkasan'));
																				?>

																				<?php
																			// echo CHtml::ajaxLink(
																			// 	'<i class="fa fa-cog"></i> Edit SNI',          
																			// 	array('ajax', 'id'=>$model->NO_ID),
																			// 	array(
																			// 		'update'=>'#req_res_loadings',
																			// 		'beforeSend' => 'function() {           
																			// 			$(".panel-body").addClass("panel-refresh");
																			// 		}',
																			// 		'complete' => 'function() {
																			// 			$(".panel-body").removeClass("panel-refresh");

																			// 		}',        
																			// 		),
																			// 	array('class' => 'btn btn-info btn-flat pull-right', 'title'=>'Update SNI')
																			// 	);
																				?>

																			</span>

																			<HR>
																				<h2>Standar : <b><?php echo $model->NO_NSPM; ?></b> - <small><span class="label label-info">Tahun <?php echo $model->TG_KEPBSN; ?></span></small></h2>

																				<?php

																				if($model->file_ringkasan==NULL && $model->file_isi==NULL){
																					echo "<div class='alert alert-warning'>Standard Ini tidak memiliki Dokumen File Isi</div>";
																				}elseif($model->file_ringkasan==NULL){
																					echo "<div class='alert alert-warning'>Standard Ini tidak memiliki Dokumen File Ringkasan</div>";
																				}elseif($model->file_isi==NULL){
																					echo "<div class='alert alert-warning'>Standard Ini tidak memiliki Dokumen File Ringkasan & File Isi</div>";
																				}
																				?>



																				<div class="row">
																					<div class="col-md-4 col-sm-6 col-xs-12">
																						<section class="panel">
																							<div class="panel-body bg-info">
																								<div class="circle-icon bg-white">
																									<i class="fa fa-tags text-info"></i>
																								</div>
																								<div>
																									<h3 class="no-margin text-white"><?php echo $model->kd_jenisstatus == NULL ? "-" : $model->JenisStatus->NM_JENISSTATUS; ?></h3>
																									Kategori
																								</div>
																							</div>
																						</section>
																					</div>
																					<div class="col-md-4 col-sm-6 col-xs-12">
																						<section class="panel">
																							<div class="panel-body bg-warning">
																								<div class="circle-icon bg-white">
																									<i class="fa fa-file text-warning"></i>
																								</div>
																								<div>
																									<h3 class="no-margin text-white"><?php echo $model->KD_JENIS_STANDAR == NULL ? "-" : $model->JenisStandar->NM_JENIS_STANDAR1; ?></h3>
																									Jenis Standar
																								</div>
																							</div>
																						</section>
																					</div>
																					<div class="col-md-4 col-sm-6 col-xs-12">
																						<section class="panel">
																							<div class="panel-body bg-danger">
																								<div class="circle-icon bg-white">
																									<i class="fa fa-book text-danger"></i>
																								</div>
																								<div>
																									<h3 class="no-margin text-white"><?php echo $model->KD_STATUS_STANDAR == NULL ? "-" : $model->StatusStandar->NM_KATEGORI1; ?></h3>
																									Status Standar
																								</div>
																							</div>
																						</section>
																					</div>
																				</div>
																				<H3><i class="fa fa-file"></i> Data SPM</H3>

																				<div id="req_res_loadings"></div>

																				<?php $this->widget('zii.widgets.CDetailView', array(
																					'data'=>$model,
																					'htmlOptions'=>array("class"=>"table"),
																					'attributes'=>array(

																						'JUDUL1',
																						'RUANG1',
																						array('name'=>'KD_LIST_KATEGORI','value'=>$model->KD_LIST_KATEGORI == NULL ? "-" : $model->SubBidang->NM_LIST_KATEGORI1),
																						'NO_NSPM',

																						'no_sk_abolisi',
																						array('name'=>'kd_jenisstatus','value'=>$model->kd_jenisstatus == NULL ? "-" : $model->JenisStatus->NM_JENISSTATUS),




																						),
																						)); ?>

																						<H3><i class="fa fa-file"></i> ICS</H3>
																						<?php $this->widget('zii.widgets.CDetailView', array(
																							'data'=>$model,
																							'htmlOptions'=>array("class"=>"table"),
																							'attributes'=>array(
																								'NO_ICS',
																								'd_ics',
																								array('name'=>'KD_BIDANG','value'=>$model->KD_BIDANG == NULL ? "-" : $model->Bidang->nm_bidang),
																								array('name'=>'KD_JENIS_STANDAR','value'=>$model->KD_JENIS_STANDAR == NULL ? "-" : $model->JenisStandar->NM_JENIS_STANDAR1),
																								array('name'=>'KD_PADANAN','value'=>$model->KD_PADANAN == NULL ? "-" : $model->Padanan->NO_PADANAN),
																								array('label'=>'Deskripsi Padanan','value'=>$model->KD_PADANAN == NULL ? "-" : $model->Padanan->DESKRIPSI),
																								array('name'=>'KD_STATUS_STANDAR','value'=>$model->KD_STATUS_STANDAR == NULL ? "-" : $model->StatusStandar->NM_KATEGORI1),
																								'KD_STATUS_NSPM',
																								array('name'=>'KD_PATEK','value'=>$model->KD_PATEK == NULL ? "-" : $model->Patek->NM_PATEK),
																								array('name'=>'KD_UNIT','value'=>$model->KD_UNIT == NULL ? "-" : $model->Unit->NM_UNIT),
																								'kd_statuspaten',
																								array('name'=>'kd_kat_standar_konsep','value'=>$model->kd_kat_standar_konsep == NULL ? "-" : $model->JenisStandarKonsep->NM_KATEGORI1),

																								'LP_perencanAan',
																								'LP_desain',
																								'LP_kontruksi',
																								'lp_om',

																								),
																								)); ?>

																								<H3><i class="fa fa-file"></i> Sub Panitia Teknis</H3>
																								<?php $this->widget('zii.widgets.CDetailView', array(
																									'data'=>$model,
																									'htmlOptions'=>array("class"=>"table"),
																									'attributes'=>array(
																										array('name'=>'KD_SUBPATEK','value'=>$model->KD_SUBPATEK == NULL ? "-" : $model->SubPatek->NM_SUBPATEK),
																										array('name'=>'KD_GUGUS','value'=>$model->KD_GUGUS == NULL ? "-" : $model->Gugus->NM_GUGUS),
																										array('name'=>'KD_DANA','value'=>$model->KD_DANA == NULL ? "-" : $model->Dana->NM_DANA),
																										'konseptor',



																										),
																										)); ?>

																										<H3><i class="fa fa-file"></i> Justifikasi</H3>
																										<?php $this->widget('zii.widgets.CDetailView', array(
																											'data'=>$model,
																											'htmlOptions'=>array("class"=>"table"),
																											'attributes'=>array(

																												'regulasi',
																												'kesepakatan_regional',
																												'kebutuhan_pasar',
																												'pertimbangan_lain',

																												),
																												)); ?>

																												<H3><i class="fa fa-file"></i> Standar yang di Adopsi</H3>
																												<?php $this->widget('zii.widgets.CDetailView', array(
																													'data'=>$model,
																													'htmlOptions'=>array("class"=>"table"),
																													'attributes'=>array(

																														'std_non_internasional',
																														'd_acuan',


																														),
																														)); ?>

																														<H3><i class="fa fa-file"></i> Standar yang tidak di Adopsi</H3>
																														<?php $this->widget('zii.widgets.CDetailView', array(
																															'data'=>$model,
																															'htmlOptions'=>array("class"=>"table"),
																															'attributes'=>array(

																																'penelitian',
																																'd_stdacuan',

																																),
																																)); ?>

																																<H3><i class="fa fa-file"></i> Penetapan RSNI</H3>
																																<?php $this->widget('zii.widgets.CDetailView', array(
																																	'data'=>$model,
																																	'htmlOptions'=>array("class"=>"table"),
																																	'attributes'=>array(
																																		'no_kepmen_rsni',
																																		'thn_penetapan_rsni',
																																		'NO_RSNI',
																																		'TGL_RSNI1',
																																		'TGL_RSNI2',
																																		'TGL_RSNI3',
																																		'TGL_RSNI4',

																																		),
																																		)); ?>

																																		<H3><i class="fa fa-file"></i> Penetapan SNI/Pedoman</H3>
																																		<?php $this->widget('zii.widgets.CDetailView', array(
																																			'data'=>$model,
																																			'htmlOptions'=>array("class"=>"table"),
																																			'attributes'=>array(

																																				'tahap_konsep',
																																				'tahap_usulan',

																																				'tgl_usulan_thp_menteri',

																																				'tgl_usulan_menteri',
																																				'tahap_usulan_menteri',

																																				'tgl_usulan_thp_bsn',
																																				'tahap_usulan_bsn',

																																				'tgl_jajak_pendapat',
																																				'tahap_jajak_pendapat',
																																				'ket_jajak_pendapat',

																																				'tgl_ebaloting',
																																				'ket_ebaloting',
																																				'tahap_ebaloting',

																																				'jmlhal',





																																				'TH_PENYUSUNAN',

																																				'BERLAKU',

																																				'statusws',
																																				'statustek',
																																				'd_pendamping',
																																				'd_terkait',
																																				'jangka_waktu',
																																				'status_pnps',
																																				'strata_penggunaan_sni',


																																				'd_bibliografi',


																																				),
																																				)); ?>

																																				<H3><i class="fa fa-file"></i> Dokumen Standar</H3>
																																				<?php $this->widget('zii.widgets.CDetailView', array(
																																					'data'=>$model,
																																					'htmlOptions'=>array("class"=>"table"),
																																					'attributes'=>array(
																																						'file_isi',
																																						'file_ringkasan',
																																						),
																																						)); ?>

																																						<H3><i class="fa fa-book"></i> Status Revisi</H3>
																																						<?php $this->widget('zii.widgets.CDetailView', array(
																																							'data'=>$model,
																																							'htmlOptions'=>array("class"=>"table"),
																																							'attributes'=>array(
																																								'NO_NSPM_REV',
																																								'LOG_REVISI',
																																								'no_revisi',
																																								'status_rev',
																																								'revisi_dari_spm',
																																								'NO_NSPM_REV',
																																								'd_sni_revisi',
																																								),
																																								)); ?>

																																								<H3><i class="fa fa-clock-o"></i> Log Dokumen</H3>
																																								<?php $this->widget('zii.widgets.CDetailView', array(
																																									'data'=>$model,
																																									'htmlOptions'=>array("class"=>"table"),
																																									'attributes'=>array(
																																										'TGL_SAVE',
																																										'TGL_UPDATE',
																																										'USER_ID',
																																										'tgl_input',
																																										),
																																										)); ?>

																																										<H3><i class="fa fa-file"></i> Nomor Dokumen</H3>
																																										<?php $this->widget('zii.widgets.CDetailView', array(
																																											'data'=>$model,
																																											'htmlOptions'=>array("class"=>"table"),
																																											'attributes'=>array(
																																												'NO_ID',
																																												'no_nspm_konsep',
																																												'NO_KEPBSN',


																																												'no_paten',


																																												),
																																												)); ?>

																																												<H3><i class="fa fa-calendar"></i> Tanggal Penting</H3>
																																												<?php $this->widget('zii.widgets.CDetailView', array(
																																													'data'=>$model,
																																													'htmlOptions'=>array("class"=>"table"),
																																													'attributes'=>array(
																																														'TGL_USUL',
																																														'TG_KEPBSN',
																																														'TGL_PANTEK',
																																														'tgl_bsn',
																																														'tgl_usulbsn',
																																														'tgl_pengajuan',
																																														'tgl_konsep',

																																														),
																																														)); ?>

																																														<H3><i class="fa fa-users"></i> Rapat</H3>

																																														<?php $this->widget('zii.widgets.CDetailView', array(
																																															'data'=>$model,
																																															'htmlOptions'=>array("class"=>"table"),
																																															'attributes'=>array(
																																																'tgl_rpt_teknis1',
																																																'tgl_rpt_teknis2',
																																																'tgl_rpt_konsensus',
																																																'tgl_rpt_pantek',
																																																'tahap_rpt_teknis1',
																																																'tahap_rpt_teknis2',
																																																'tahap_rpt_konsensus',
																																																'tahap_rpt_pantek',
																																																),
																																																)); ?>
																																														<STYLE>
																																															th{width:200px;}
																																														</STYLE>

