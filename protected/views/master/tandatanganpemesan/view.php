<?php
/* @var $this Tanda Tangan PemesanController */
/* @var $model Tanda Tangan Pemesan */

$this->breadcrumbs=array(
	'Tanda Tangan Pemesans'=>array('index'),
	$model->Id,
	);

$this->pageTitle='Detail Tanda Tangan Pemesan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Tanda Tangan Pemesan'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tanda Tangan Pemesan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tanda Tangan Pemesan'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->Id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tanda Tangan Pemesan'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->Id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tanda Tangan Pemesan'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Tanda Tangan Pemesan'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Tanda Tangan Pemesan'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Tanda Tangan Pemesan'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->Id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Tanda Tangan Pemesan'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->Id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Tanda Tangan Pemesan'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'Id',
																	'Nama',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

