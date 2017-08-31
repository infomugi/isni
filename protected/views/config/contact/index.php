<?php
/* @var $this ContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contacts',
	);

	$this->pageTitle='List Contact';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Contact',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Contact',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>