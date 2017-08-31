<?php
/* @var $this Monev StandardController */
/* @var $model Monev Standard */

$this->breadcrumbs=array(
	'Monev Standards'=>array('index'),
	$model->id,
	);

$this->pageTitle='Detail Monev Standard';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Monev Standard'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Monev Standard'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Monev Standard'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Monev Standard'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Monev Standard'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Monev Standard'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Monev Standard'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Monev Standard'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Monev Standard'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Monev Standard'));
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

