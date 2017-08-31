<?php
/* @var $this IstilahController */
/* @var $model Istilah */

$this->breadcrumbs=array(
	'Istilahs'=>array('index'),
	$model->id_istilah,
	);

$this->pageTitle='Detail Istilah';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Istilah'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Istilah'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Istilah'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_istilah,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Istilah'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_istilah,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Istilah'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Istilah'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Istilah'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Istilah'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_istilah,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Istilah'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_istilah,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Istilah'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id_istilah',
																	'istilah',
																	'definisi',
																	'id_bidang',
																	'no_id',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

