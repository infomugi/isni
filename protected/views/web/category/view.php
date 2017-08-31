<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Category';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success hidden-xs','title'=>'Add Category'));
		?>
		<?php echo CHtml::link('Add Tag',
			array('web/tag/create', 'id'=>$model->id_category),
			array('class' => 'btn btn-success','title'=>'Add Tag'));
			?>		
			<?php echo CHtml::link('List',
				array('index'),
				array('class' => 'btn btn-success hidden-xs', 'title'=>'List Category'));
				?>
				<?php echo CHtml::link('Manage',
					array('admin'),
					array('class' => 'btn btn-success hidden-xs','title'=>'Manage Category'));
					?>
					<?php echo CHtml::link('Edit', 
						array('update', 'id'=>$model->id_category,
							), array('class' => 'btn btn-info', 'title'=>'Edit Category'));
							?>
							<?php echo CHtml::link('Image', 
								array('image', 'id'=>$model->id_category,
									), array('class' => 'btn btn-info', 'title'=>'Edit Image'));
									?>							

									<HR>

										<?php $this->widget('zii.widgets.CDetailView', array(
											'data'=>$model,
											'htmlOptions'=>array("class"=>"table"),
											'attributes'=>array(
												'name',
												'icon',
												'url',
												array('name'=>'status','value'=>User::model()->status($model->status))
												),
												)); ?>

										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'tag-grid',
											'dataProvider'=>$dataProvider,
											'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
											'columns'=>array(

												array(
													'header'=>'No',
													'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
													),

												array('name'=>'category_id','value'=>'$data->Category->name'),
												'name',
												array('name'=>'status','value'=>'User::model()->status($data->status)'),
												array(
													'class'=>'CButtonColumn',
													'template'=>'{view}',
													'buttons'=>array(
														'view'=>
														array(
															'url'=>'Yii::app()->createUrl("web/tag/view", array("id"=>$data->id_category_sub))',
															),
														),
													),
												),
												)); ?>

											</section>

											<STYLE>
												th{width:150px;}
											</STYLE>

