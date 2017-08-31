<?php
/* @var $this SmmController */
/* @var $model Smm */

$this->breadcrumbs=array(
	'Smms'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Smm';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Smm'));
		?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Smm'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Smm'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Smm'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Smm'));
									?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Smm'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Smm'));
													?>
                                                <?php echo CHtml::link('Upload', 
												array('upload', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Upload Smm'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Smm'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																// 	'id',
																	'judul',
																	'keterangan',
																	'nm_file',
																// 	'id_subject',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

