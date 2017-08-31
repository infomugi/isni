<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->Id,
	);

$this->pageTitle='Detail Pengguna - '.$model->Nama;
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Pengguna'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pengguna'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pengguna'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->Id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pengguna'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->Id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pengguna'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Pengguna'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pengguna'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pengguna'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->Id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pengguna'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->Id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pengguna'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'Nama',
																	'Email',
																	'Alamat',
																	array('name'=>'Id_kabupaten_kota','value'=>$model->Kota->nama),
																	array('name'=>'Id_jenis_pekerjaan','value'=>$model->Jenis->JenisPekerjaan),
																	array('name'=>'Id_bidang_pekerjaan','value'=>$model->Bidang->BidangPekerjaan),
																	array('name'=>'Id_tujuan','value'=>$model->Tujuan->Tujuan),
																	'Nama_instansi',
																// 	'Flag_register',
																// 	'Id_simpul',
																	'Tanggal_entry',
																// 	'User_entry',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

