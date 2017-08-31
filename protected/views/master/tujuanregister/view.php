<?php
/* @var $this Tujuan RegisterController */
/* @var $model Tujuan Register */

$this->breadcrumbs=array(
	'Tujuan Registers'=>array('index'),
	$model->Id,
	);

$this->pageTitle='Detail Tujuan Register';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Tujuan Register'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tujuan Register'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tujuan Register'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->Id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tujuan Register'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->Id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tujuan Register'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Tujuan Register'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tujuan Register'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tujuan Register'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->Id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tujuan Register'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->Id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tujuan Register'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'Id',
																	'Tujuan',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

