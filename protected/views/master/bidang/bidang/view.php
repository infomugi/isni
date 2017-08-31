<?php
/* @var $this BidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Mst Bidangs'=>array('index'),
	$model->kd_bidang,
	);

$this->pageTitle='Detail Bidang';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Bidang'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bidang'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bidang'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->kd_bidang,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bidang'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->kd_bidang,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bidang'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Bidang'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Bidang'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Bidang'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->kd_bidang,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Bidang'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->kd_bidang,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Bidang'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'kd_bidang',
																	'nm_bidang',
																	),
																	)); ?>

																	<?php echo Bidang::model()->getTotal(01); ?>

																	<STYLE>
																		th{width:150px;}
																	</STYLE>

