<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */

$this->breadcrumbs=array(
	'Tb List Kategoris'=>array('index'),
	$model->KD_LIST_KATEGORI,
	);

$this->pageTitle='Detail Sub Bidang';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Bidang'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Bidang'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Bidang'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->KD_LIST_KATEGORI,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sub Bidang'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->KD_LIST_KATEGORI,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sub Bidang'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Bidang'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Bidang'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Bidang'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->KD_LIST_KATEGORI,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Sub Bidang'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->KD_LIST_KATEGORI,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Sub Bidang'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'KD_LIST_KATEGORI',
																	'NM_LIST_KATEGORI1',
																	array('label'=>'Total Dokumen','value'=>Bidang::model()->getTotal($model->KD_LIST_KATEGORI)),
																	array(
																		'name'=>'kd_bidang',
																		'value'=>$model->Bidang->nm_bidang),
																	array('label'=>'Total Bidang Dokumen','value'=>Bidang::model()->getTotal($model->KD_LIST_KATEGORI)),
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

