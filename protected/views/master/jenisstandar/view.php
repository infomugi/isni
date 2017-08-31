<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */

$this->breadcrumbs=array(
	'Jenis Standars'=>array('index'),
	$model->KD_JENIS_STANDAR,
	);

$this->pageTitle='Detail Jenis Standar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Jenis Standar'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Jenis Standar'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Jenis Standar'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_JENIS_STANDAR,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jenis Standar'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_JENIS_STANDAR,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Jenis Standar'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Jenis Standar'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Jenis Standar'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Jenis Standar'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_JENIS_STANDAR,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Jenis Standar'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_JENIS_STANDAR,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Jenis Standar'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_JENIS_STANDAR',
																	'NM_JENIS_STANDAR1',
																	'NM_JENIS_STANDAR2',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

