<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */

$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	$model->TITLE,
	);

$this->pageTitle='Detail Multimedia';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Multimedia'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Multimedia'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Multimedia'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->MULTIMEDIA_ID,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Multimedia'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->MULTIMEDIA_ID,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Multimedia'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Multimedia'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Multimedia'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Multimedia'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->MULTIMEDIA_ID,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Multimedia'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->MULTIMEDIA_ID,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Multimedia'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'MULTIMEDIA_ID',
																	'TITLE',
																	'DESCRIPTION',
																	'FILE_DATE',
																	'FILE_TYPE',
																	'FILE_NAME',
																	'STATUS',
																	'C_DATE',
																	'C_UID',
																	'M_DATE',
																	'M_UID',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

