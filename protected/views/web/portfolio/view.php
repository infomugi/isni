<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */

$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Portfolio';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Portfolio'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Portfolio'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Portfolio'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_portfolio,
						), array('class' => 'btn btn-info', 'title'=>'Edit Portfolio'));
						?>
						<?php echo CHtml::link('Image', 
							array('image', 'id'=>$model->id_portfolio,
								), array('class' => 'btn btn-info', 'title'=>'Image Portfolio'));
								?>						
								<?php echo CHtml::link('Delete', 
									array('delete', 'id'=>$model->id_portfolio,
										),  array('class' => 'btn btn-warning', 'title'=>'Hapus Portfolio'));
										?>

										<HR>

											<?php $this->widget('zii.widgets.CDetailView', array(
												'data'=>$model,
												'htmlOptions'=>array("class"=>"table"),
												'attributes'=>array(
													'name',
													'description',
													'image',
													array('name'=>'category_id','value'=>$model->Category->name),
													array('name'=>'status','value'=>User::model()->status($model->status))
													),
													)); ?>

											<?php
											$thumbSmall=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/portfolio/big/".$model->image);
											$thumbSmall->cropFromCenter(192,192);
											$thumbSmall->save(Yii::getPathOfAlias('webroot')."/image/portfolio/small/".$model->image);

											$thumbMiddle=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/portfolio/big/".$model->image);
											$thumbMiddle->cropFromCenter(320,320);
											$thumbMiddle->save(Yii::getPathOfAlias('webroot')."/image/portfolio/middle/".$model->image);
											?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

