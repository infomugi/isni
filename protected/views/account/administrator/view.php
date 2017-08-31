<?php
/* @var $this AdministratorController */
/* @var $model Administrator */

$this->breadcrumbs=array(
	'Administrators'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Detail Administrator';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Administrator'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Administrator'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Administrator'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Administrator'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_user,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Administrator'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Administrator'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Administrator'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Administrator'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_user,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Administrator'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id_user,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Administrator'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'id_user',
																	'user_name',
																	'pass',
																	'email',
																	'nama',
																	'alamat',
																	'no_telp',
																	'status',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

