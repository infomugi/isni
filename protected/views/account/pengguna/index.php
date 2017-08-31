<?php
/* @var $this PenggunaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penggunas',
	);

$this->pageTitle='List Pengguna';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Add Pengguna'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pengguna'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pengguna'));
				?>

			</span> 

			<span class="hidden-xs">

				<?php echo CHtml::link('Add',
					array('create'),
					array('class' => 'btn btn-primary btn-flat','title'=>'Add Pengguna'));
					?>
					<?php echo CHtml::link('List',
						array('index'),
						array('class' => 'btn btn-primary btn-flat', 'title'=>'List Pengguna'));
						?>
						<?php echo CHtml::link('Manage',
							array('admin'),
							array('class' => 'btn btn-primary btn-flat','title'=>'Manage Pengguna'));
							?>

						</span>

						<HR>

							<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_view',
								)); ?>

