<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Event';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Event'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Event'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Event'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id_event,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Event'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id_event,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Event'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-primary btn-flat','title'=>'Add Event'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-primary btn-flat', 'title'=>'List Event'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-primary btn-flat','title'=>'Manage Event'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id_event,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Event'));
													?>
													<?php echo CHtml::link('Image', 
														array('image', 'id'=>$model->id_event,
															), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Event'));
															?>
															<?php echo CHtml::link('Delete', 
																array('delete', 'id'=>$model->id_event,
																	),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Event'));
																	?>

																</span>

																<HR>

																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$model,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(
																			'created_date',
																			'name',
																			'description',
																			'start_date',
																			'end_date',
																			'time',
																			'location',
																			),
																			)); ?>

																	<?php

																	$thumbSmall=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/event/big/".$model->image);
																	$thumbSmall->cropFromCenter(125,125);
																	$thumbSmall->save(Yii::getPathOfAlias('webroot')."/image/event/small/".$model->image);

																	$thumbMiddle=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/event/big/".$model->image);
																	$thumbMiddle->cropFromCenter(220,220);
																	$thumbMiddle->save(Yii::getPathOfAlias('webroot')."/image/event/middle/".$model->image);

																	?>


																	<STYLE>
																		th{width:150px;}
																	</STYLE>

