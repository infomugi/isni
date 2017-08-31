<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
	);

	$this->pageTitle='List User';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add User',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage User',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>