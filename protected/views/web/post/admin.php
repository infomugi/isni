<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Post';

// Yii::app()->clientScript->registerScript('ajaxupdate', "
// $('#post-grid a.ajaxupdate').live('click', function() {
//         $.fn.yiiGridView.update('post-grid', {
//                 type: 'POST',
//                 url: $(this).attr('href'),
//                 success: function() {
//                         $.fn.yiiGridView.update('post-grid');
//                 }
//         });
//         return false;
// });
// ");
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md','title'=>'Add Post'));
		?>

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md','title'=>'Posts List'));
			?>

			<?php echo CHtml::link('<i class="fa fa-tags"></i>',
				array('category/admin'),
				array('class' => 'btn btn-primary btn-md','title'=>'Category List'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('New',
					array('create'),
					array('class' => 'btn btn-primary btn-flat','title'=>'New Post'));
					?>

					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-primary btn-flat','title'=>'Posts List'));
						?>

						<?php echo CHtml::link('Category',
							array('web/category/admin'),
							array('class' => 'btn btn-primary btn-md','title'=>'Category List'));
							?>

						</span>


						<HR>

							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'post-grid',
								'dataProvider'=>$model->search(),
								'filter'=>$model,
								'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
								'columns'=>array(

									array(
										'header'=>'No',
										'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
										'htmlOptions'=>array('width'=>'10px', 
											'style' => 'text-align: center;')),

									// array(
									// 	'name'=>'id_user',
									// 	'filter'=>CHtml::listData(Users::model()->findAllByAttributes(array('status'=>1)),'first_name','first_name'),
									// 	'value'=>'$data->Member->first_name ." ".$data->Member->last_name'
									// 	),									

									'created_date',
									'title',

									array(
										'filter'=>CHtml::listData(Category::model()->findAllByAttributes(array('status'=>1)),'id_category','name'),
										'name'=>'id_category',
										'value'=>'$data->Category->name'
										),									

									array(	
										'name'=>'status',
										'filter'=>array('0'=>'Disable','1'=>'Enable'),
										'value'=>'Post::model()->status($data->status)',
										),

									// array(
									// 	'name'=>'status',
									// 	'type'=>'raw',
									// 	'value'=>'CHtml::link(Post::model()->status($data->status), array("updateStats", "id"=>$data->id_post), array("class"=>"ajaxupdate"));',
									// ),									

									array(
										'class'=>'CButtonColumn',
										'template'=>'{view}{delete}',
										),

									),
									)); ?>

