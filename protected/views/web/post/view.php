<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->Category->name=>array('category/view&id='.$model->id_category),
	);

$this->pageTitle='Detail Post';
?>

	<span class="visible-xs">

		<?php echo CHtml::link('<i class="fa fa-plus"></i>',
			array('create'),
			array('class' => 'btn btn-primary btn-md','title'=>'Add Post'));
		?>

		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md', 'title'=>'Posts List'));
		?>

		<?php echo CHtml::link('<i class="fa fa-table"></i>',
			array('admin'),
			array('class' => 'btn btn-primary btn-md','title'=>'Manage Posts'));
		?>

		<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
			array('update', 'id'=>$model->id_post,
				), array('class' => 'btn btn-info btn-md', 'title'=>'Edit Post'));
		?>

		<?php echo CHtml::link('<i class="fa fa-camera"></i>', 
			array('changeimage', 'id'=>$model->id_post,
				), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Avatar'));
		?>		

		<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
			array('remove', 'id'=>$model->id_post,
				),  array('class' => 'btn btn-danger btn-md', 'title'=>'Delete Post'));
		?>

		<?php echo CHtml::link('<i class="fa fa-eye"></i>', 
			array('product/post', 'url'=>$model->url,
				),  array('class' => 'btn btn-success btn-md', 'title'=>'View Post'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('New',
			array('create'),
			array('class' => 'btn btn-primary btn-flat','title'=>'New Post'));
		?>

		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Post'));
		?>

		<?php echo CHtml::link('Manage',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Post'));
		?>

		<?php echo CHtml::link('Edit', 
			array('update', 'id'=>$model->id_post,
				), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Post'));
		?>	

		<?php echo CHtml::link('Edit Post Image', 
			array('changeimage', 'id'=>$model->id_post,
				), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Post Image'));
		?>	

		<?php echo CHtml::link('Delete', 
			array('remove', 'id'=>$model->id_post,
				),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Delete Post'));
		?>

		<?php if($model->status==0){ ?>

			<?php echo CHtml::link('<i class="fa fa-check"></i>', 
				array('publish', 'id'=>$model->id_post), 
				array('class' => 'btn btn-success waves-effect waves-light tooltips', 'title'=>'Publish')
				);
			?>	

			<?php }else{ ?>

				<?php echo CHtml::link('<i class="fa fa-minus-square"></i>', 
					array('default', 'id'=>$model->id_post), 
					array('class' => 'btn btn-warning waves-effect waves-light tooltips', 'title'=>'Set Default')
					);
				?>		

				<?php } ?>																						

				<?php echo CHtml::link('View Post', 
					array('article/post', 'url'=>$model->url,
						),  array('class' => 'btn btn-success btn-flat'));
				?>


			</span>

						<HR>

							<?php
							foreach(Yii::app()->user->getFlashes() as $key =>$message)
							{
								echo '<div class="alert alert-'.$key.'">'.$message.'</div>';
							}
							?>

							<div id="post" style="text-transform:capitalize;">
								<H1>
									<?php echo CHtml::encode($model->title); ?>
								</H1>
							</div>
							<H4>
								<i class="fa fa-calendar a"></i> <?php echo CHtml::encode($model->created_date); ?> - 
								<i class="fa fa-tags a"></i> <?php echo CHtml::encode($model->Category->name); ?> -
								<i class="fa fa-eye a"></i> <?php echo CHtml::encode($model->views); ?> Views
								<i class="fa fa-heart a"></i> <?php echo CHtml::encode($model->likes); ?> Like
								<i class="fa fa-info a"></i> <?php echo CHtml::encode(Post::model()->status($model->status)); ?>
							</H4>
							<div style="text-align:justify;">
								<?php echo $model->description; ?>
							</div>

							<?php
							
							// $thumbSmall=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/news/big/".$model->image);
							// $thumbSmall->adaptiveResize(125,125);
							// $thumbSmall->save(Yii::getPathOfAlias('webroot')."/image/news/small/".$model->image);

							// $thumbMiddle=Yii::app()->phpThumb->create(Yii::getPathOfAlias('webroot')."/image/news/big/".$model->image);
							// $thumbMiddle->adaptiveResize(320,430);
							// $thumbMiddle->save(Yii::getPathOfAlias('webroot')."/image/news/middle/".$model->image);
							
							?>



