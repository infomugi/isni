<?php
/* @var $this Sub Panitia TeknisController */
/* @var $model Sub Panitia Teknis */

$this->breadcrumbs=array(
	'Sub Panitia Tekniss'=>array('index'),
	$model->KD_SUBPATEK,
	);

$this->pageTitle='Detail Sub Panitia Teknis';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Panitia Teknis'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Panitia Teknis'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Panitia Teknis'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_SUBPATEK,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sub Panitia Teknis'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_SUBPATEK,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sub Panitia Teknis'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Panitia Teknis'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Panitia Teknis'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Panitia Teknis'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_SUBPATEK,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sub Panitia Teknis'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_SUBPATEK,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sub Panitia Teknis'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_SUBPATEK',
																	'KD_PATEK',
																	'NM_SUBPATEK',
																	'JAWAB',
																	'KODE_SUBPATEK',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

