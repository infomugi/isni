<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Units'=>array('index'),
	$model->KD_UNIT,
	);

$this->pageTitle='Detail Unit';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Unit'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Unit'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Unit'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_UNIT,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Unit'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_UNIT,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Unit'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Unit'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Unit'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Unit'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_UNIT,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Unit'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_UNIT,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Unit'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_UNIT',
																	'NM_UNIT',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

