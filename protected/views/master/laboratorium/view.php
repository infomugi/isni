<?php
/* @var $this LaboratoriumController */
/* @var $model Laboratorium */

$this->breadcrumbs=array(
	'Laboratoria'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Laboratorium';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Laboratorium'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Laboratorium'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Laboratorium'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Laboratorium'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Laboratorium'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Laboratorium'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Laboratorium'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Laboratorium'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Laboratorium'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Laboratorium'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id',
																	'judul',
																	'keterangan',
																	'nm_file',
																	'id_subject',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

