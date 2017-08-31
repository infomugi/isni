<?php
/* @var $this Jenis StatusController */
/* @var $model Jenis Status */

$this->breadcrumbs=array(
	'Jenis Statuses'=>array('index'),
	$model->KD_JENISSTATUS,
	);

$this->pageTitle='Detail Jenis Status';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Jenis Status'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Jenis Status'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Jenis Status'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_JENISSTATUS,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jenis Status'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_JENISSTATUS,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Jenis Status'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Jenis Status'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Jenis Status'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Jenis Status'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_JENISSTATUS,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jenis Status'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_JENISSTATUS,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Jenis Status'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_JENISSTATUS',
																	'NM_JENISSTATUS',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

