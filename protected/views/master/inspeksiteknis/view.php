<?php
/* @var $this Inspeksi TeknisController */
/* @var $model Inspeksi Teknis */

$this->breadcrumbs=array(
	'Inspeksi Teknises'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Inspeksi Teknis';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Inspeksi Teknis'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Inspeksi Teknis'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Inspeksi Teknis'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Inspeksi Teknis'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Inspeksi Teknis'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Inspeksi Teknis'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Inspeksi Teknis'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Inspeksi Teknis'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Inspeksi Teknis'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Inspeksi Teknis'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id',
																	'nm_inspeksi_teknis',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

