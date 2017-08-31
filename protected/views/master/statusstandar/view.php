<?php
/* @var $this Status StandarController */
/* @var $model Status Standar */

$this->breadcrumbs=array(
	'Status Standars'=>array('index'),
	$model->KD_KATEGORI,
	);

$this->pageTitle='Detail Status Standar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Status Standar'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Status Standar'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Status Standar'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_KATEGORI,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Status Standar'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_KATEGORI,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Status Standar'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Status Standar'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Status Standar'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Status Standar'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_KATEGORI,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Status Standar'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_KATEGORI,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Status Standar'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_KATEGORI',
																	'NM_KATEGORI1',
																	'NM_KATEGORI2',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

