<?php
/* @var $this ServicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Services',
	);

	$this->pageTitle='List Services';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Services',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Services',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>