<?php
/* @var $this KomentarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Komentars',
	);

$this->pageTitle='List Komentar';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
		array('index'),
		array('class' => 'btn btn-primary btn-flat', 'title'=>'List Komentar'));
		?>
		<?php echo CHtml::link('<i class="fa fa-table"></i>',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Komentar'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add',
				array('create'),
				array('class' => 'btn btn-primary btn-flat','title'=>'Add Komentar'));
				?>
				<?php echo CHtml::link('List',
					array('index'),
					array('class' => 'btn btn-primary btn-flat', 'title'=>'List Komentar'));
					?>
					<?php echo CHtml::link('Manage',
						array('admin'),
						array('class' => 'btn btn-primary btn-flat','title'=>'Manage Komentar'));
						?>

					</span>

					<HR>

						<?php $this->widget('zii.widgets.CListView', array(
							'dataProvider'=>$dataProvider,
							'itemView'=>'_view',
							)); ?>

