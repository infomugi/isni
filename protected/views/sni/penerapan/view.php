<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */

$this->breadcrumbs=array(
	'Penerapan Snis'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Penerapan SNI';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Penerapan SNI'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Penerapan SNI'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Penerapan SNI'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Penerapan SNI'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Penerapan SNI'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Penerapan SNI'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Penerapan SNI'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Penerapan SNI'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Penerapan SNI'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Penerapan SNI'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(

																	array('name'=>'no_nspm','value'=>$model->no_nspm),
																	array('name'=>'no_nspm','value'=>$model->Standar->JUDUL1),
																	array('name'=>'id_inspeksi_teknis','value'=>$model->InspeksiTeknis->nm_inspeksi_teknis),
																	array('name'=>'id_regulasi_teknis','value'=>$model->RegulasiTeknis->nm_regulasi_teknis),
																	// array('name'=>'id_provinsi','value'=>$model->Provinsi->nama),

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
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

