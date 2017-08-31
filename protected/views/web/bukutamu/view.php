<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Bukutamus'=>array('index'),
	$model->no_message,
	);

$this->pageTitle='Detail Bukutamu';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Bukutamu'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bukutamu'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bukutamu'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->no_message,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bukutamu'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->no_message,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bukutamu'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Bukutamu'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bukutamu'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bukutamu'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->no_message,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bukutamu'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->no_message,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bukutamu'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'NAMA',
																	'KOTA',
																	'EMAIL',
																	'HOMEPAGE',
																	'KOMENTAR',
																	'IP',
																	'TGLPOST',
																	'status',
																	'balasan',
																	'no_message',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

