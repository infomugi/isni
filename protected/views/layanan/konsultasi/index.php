<?php
/* @var $this KonsultasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Konsultasis',
	);

$this->pageTitle='Konsultasi Terbaru';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-table"></i>',
		array('admin'),
		array('class' => 'btn btn-primary btn-flat','title'=>'Manage Konsultasi'));
		?>

	</span> 

	<span class="hidden-xs">

		<?php echo CHtml::link('Manage',
			array('admin'),
			array('class' => 'btn btn-primary btn-flat','title'=>'Manage Konsultasi'));
			?>

		</span>

		<HR>

			<div class="col-md-12">
				<div class="row">

					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>

					</div>
				</div>

