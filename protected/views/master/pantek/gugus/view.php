<?php
/* @var $this Gugus KerjaController */
/* @var $model Gugus Kerja */

$this->breadcrumbs=array(
	'Gugus Kerjaes'=>array('index'),
	$model->KD_GUGUS,
	);

$this->pageTitle='Detail Gugus Kerja';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Gugus Kerja'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Gugus Kerja'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Gugus Kerja'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_GUGUS,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Gugus Kerja'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_GUGUS,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Gugus Kerja'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Gugus Kerja'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Gugus Kerja'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Gugus Kerja'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_GUGUS,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Gugus Kerja'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_GUGUS,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Gugus Kerja'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_GUGUS',
																	'KD_SUBPATEK',
																	'NM_GUGUS',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

