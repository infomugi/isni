<?php
/* @var $this PortfolioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Portfolios',
	);

	$this->pageTitle='List Portfolio';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Portfolio',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Portfolio',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>