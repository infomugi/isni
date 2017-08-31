<?php
/* @var $this Sub Panitia TeknisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Panitia Tekniss',
	);

$this->pageTitle='List Sub Panitia Teknis';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Panitia Teknis'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Panitia Teknis'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Panitia Teknis'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-primary btn-flat','title'=>'Add Sub Panitia Teknis'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-primary btn-flat', 'title'=>'List Sub Panitia Teknis'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-primary btn-flat','title'=>'Manage Sub Panitia Teknis'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

