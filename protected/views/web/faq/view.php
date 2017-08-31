<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->breadcrumbs=array(
	'Faqs'=>array('index'),
	$model->ID_FAQ,
	);

$this->pageTitle='Detail Faq';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Faq'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Faq'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Faq'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->ID_FAQ,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Faq'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->ID_FAQ,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Faq'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Faq'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Faq'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Faq'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->ID_FAQ,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Faq'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->ID_FAQ,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Faq'));
															?>

														</span>

														<HR>

															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'ID_FAQ',
																	'TANYA',
																	'JAWAB',
																	'USER_ID',
																	'TGLBUAT',
																	'URL_GBR',
																	'KET_GBR',
																	),
																	)); ?>

															<STYLE>
																th{width:150px;}
															</STYLE>

