<?php
/* @var $this StreamController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Streams',
	);

$this->pageTitle='List Video';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('youtube'),
		array('class' => 'btn btn-primary btn-md'));
		?>

		<?php echo CHtml::link('<i class="fa fa-list"></i>',
			array('indexvideo'),
			array('class' => 'btn btn-primary btn-md'));
			?>			

		</span> 

		<span class="hidden-xs">


			<?php echo CHtml::link('Add Video',
				array('youtube'),
				array('class' => 'btn btn-primary btn-flat'));
				?>

				<?php echo CHtml::link('Galeri Video',
					array('indexvideo'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'stream-grid',
						'dataProvider'=>$dataProvider,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'name',
							'description',

		// array(	
		// 	'name'=>'type',
		// 	'filter'=>array('0'=>'Disable','1'=>'Enable'),
		// 	'value'=>'Stream::model()->status($data->type)',
		// 	),
							array(	
								'name'=>'status',
								'filter'=>array('0'=>'Disable','1'=>'Enable'),
								'value'=>'Post::model()->status($data->status)',
								),

							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								),
							),
							)); ?>



