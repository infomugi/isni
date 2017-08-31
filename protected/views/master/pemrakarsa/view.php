<?php
/* @var $this PemrakarsaController */
/* @var $model Pemrakarsa */

$this->breadcrumbs=array(
	'Pemrakarsas'=>array('index'),
	$model->KD_DANA,
	);

$this->pageTitle='Detail Pemrakarsa';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Pemrakarsa'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pemrakarsa'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pemrakarsa'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_DANA,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pemrakarsa'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_DANA,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pemrakarsa'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Pemrakarsa'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pemrakarsa'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pemrakarsa'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_DANA,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pemrakarsa'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_DANA,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Pemrakarsa'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_DANA',
																	'NM_DANA',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

