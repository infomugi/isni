<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	$model->id_standar,
	);

$this->pageTitle='Detail '.$model->StatusStandar->NM_KATEGORI1;
?>


<section class="col-xs-12">

	<?php echo CHtml::link('<i class="fa fa-plus-o"></i> Tambah',
		array('create'),
		array('class' => 'btn btn-info btn-flat'));
		?>

		<?php echo CHtml::link('<i class="fa fa-edit"></i> Edit', 
			array('update', 'id'=>$model->id_standar,
				), array('class' => 'btn btn-warning btn-flat'));
				?>

				<?php echo CHtml::link('<i class="fa fa-image"></i> Image', 
					array('uploadcover', 'id'=>$model->id_standar,
						), array('class' => 'btn btn-warning btn-flat','title'=>'Cover Preview'));
						?>

						<?php echo CHtml::link('<i class="fa fa-upload"></i> Isi', 
							array('uploadisi', 'id'=>$model->id_standar,
								), array('class' => 'btn btn-warning btn-flat', 'title'=>'Upload File Isi'));
								?>

								<?php echo CHtml::link('<i class="fa fa-upload"></i> Ringkasan', 
									array('uploadringkasan', 'id'=>$model->id_standar,
										), array('class' => 'btn btn-warning btn-flat', 'title'=>'Upload File Ringkasan'));
										?>

										<?php echo CHtml::link('<i class="fa fa-upload"></i> Lihat', 
											array('detail', 'id'=>$model->id_standar,
												),  array('class' => 'btn btn-info btn-flat', 'title'=>'Lihat Standar'));
												?>

												<?php echo CHtml::link('<i class="fa fa-remove"></i> Delete', 
													array('delete', 'id'=>$model->id_standar,
														),  array('class' => 'btn btn-danger btn-flat pull-right', 'title'=>'Hapus Standar'));
														?>



														<HR>
															<h2>Standar : <b><?php echo $model->no_nspm; ?></b> - 
																<small><span class="label label-info">Tahun <?php echo $model->tahun == "0000" ? "-" : $model->tahun; ?></span></small></h2>

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
																					<h3 class="no-margin text-white"><?php echo $model->kd_bidang == NULL ? "-" : $model->Bidang->nm_bidang; ?></h3>
																					Bidang
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
																					<h3 class="no-margin text-white"><?php echo $model->kd_subbidang == NULL ? "-" : $model->SubBidang->NM_LIST_KATEGORI1; ?></h3>
																					Sub Bidang
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
																					<h3 class="no-margin text-white"><?php echo $model->kd_jenisstandar == NULL ? "-" : $model->JenisStandar->NM_JENIS_STANDAR1; ?></h3>
																					Jenis
																				</div>
																			</div>
																		</section>
																	</div>
																</div>


																<H3><i class="fa fa-file"></i> <?php echo $this->pageTitle; ?></H3>
																<?php $this->widget('zii.widgets.CDetailView', array(
																	'data'=>$model,
																	'htmlOptions'=>array("class"=>"table"),
																	'attributes'=>array(
																		'no_nspm',
																		array('name'=>'no_sk','value'=>$model->no_sk == "" ? "-" : $model->no_sk),
																		array('name'=>'tahun','value'=>$model->tahun == "0000" ? "-" : $model->tahun),
																		'judul',
																		'ruanglingkup',
																		'jumlah_hal',
																		),
																		)); ?>

																		<H3><i class="fa fa-tags"></i> Detail</H3>
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$model,
																			'htmlOptions'=>array("class"=>"table"),
																			'attributes'=>array(
																				array('name'=>'kd_bidang','value'=>$model->kd_bidang == NULL ? "-" : $model->Bidang->nm_bidang),
																				array('name'=>'kd_subbidang','value'=>$model->kd_subbidang == NULL ? "-" : $model->SubBidang->NM_LIST_KATEGORI1),
																				array('name'=>'kd_jenisstandar','value'=>$model->kd_jenisstandar == NULL ? "-" : $model->JenisStandar->NM_JENIS_STANDAR1),
																				array('name'=>'kd_statusstandar','value'=>$model->kd_statusstandar == NULL ? "-" : $model->StatusStandar->NM_KATEGORI1),
																				'kd_ics',
																				'kd_padanan',
																				'kd_pemrakarsa',
																				'kd_konseptor',
																				'no_ics',
																				'padanan',
																				'pemrakarsa',
																				'konseptor',													
																				),
																				)); ?>


																				<H3><i class="fa fa-file-o"></i> File Dokumen</H3>

																				<?php echo CHtml::link('<i class="fa fa-download"></i> Isi', 
																					array('downloadisi', 'id'=>$model->id_standar,
																						), array('class' => 'btn btn-warning btn-flat', 'title'=>'Download File Isi'));
																						?>

																						<?php echo CHtml::link('<i class="fa fa-download"></i> Ringkasan', 
																							array('downloadringkasan', 'id'=>$model->id_standar,
																								), array('class' => 'btn btn-warning btn-flat', 'title'=>'Download File Ringkasan'));
																								?>

																								<?php $this->widget('zii.widgets.CDetailView', array(
																									'data'=>$model,
																									'htmlOptions'=>array("class"=>"table"),
																									'attributes'=>array(
																										'file_isi',
																										'file_ringkasan',
																										'image',
																										'views',
																										'download',
																										),
																										)); ?>


																										<H3><i class="fa fa-clock-o"></i> Log Dokumen</H3>
																										<?php $this->widget('zii.widgets.CDetailView', array(
																											'data'=>$model,
																											'htmlOptions'=>array("class"=>"table"),
																											'attributes'=>array(
																												'tanggal_buat',
																												'tanggal_update',
																												'tanggal_lihat',
																												),
																												)); ?>

																											</section>

																											<STYLE>
																												th{width:150px;}
																											</STYLE>

