<?php
/* @var $this PatekController */
/* @var $model Patek */

$this->breadcrumbs=array(
	'Pateks'=>array('index'),
	$model->KD_PATEK,
	);

$this->pageTitle='Detail Patek';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Patek'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Patek'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Patek'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_PATEK,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Patek'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_PATEK,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Patek'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Patek'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Patek'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Patek'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_PATEK,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Patek'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_PATEK,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Patek'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_PATEK',
																	'NM_PATEK',
																	'JAWAB',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

