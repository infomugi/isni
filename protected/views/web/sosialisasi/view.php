<?php
/* @var $this SosialisasiController */
/* @var $model Sosialisasi */

$this->breadcrumbs=array(
	'Sosialisasis'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Sosialisasi';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Sosialisasi'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sosialisasi'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sosialisasi'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sosialisasi'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sosialisasi'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Sosialisasi'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sosialisasi'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sosialisasi'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sosialisasi'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sosialisasi'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id',
																	'nm_materi',
																	'keterangan',
																	'nm_file',
																	'tgl_input',
																	'user_input',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

