<?php
/* @var $this PatekController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pateks',
	);

$this->pageTitle='List Patek';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Patek'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Patek'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Patek'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-primary btn-flat','title'=>'Add Patek'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-primary btn-flat', 'title'=>'List Patek'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-primary btn-flat','title'=>'Manage Patek'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

