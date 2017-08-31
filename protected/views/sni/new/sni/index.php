<?php
/* @var $this SniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Snis',
	);

	$this->pageTitle='Daftar Sni';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Sni',
 array('create'),
 array('class' => 'btn btn-info btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Sni',
 array('admin'),
 array('class' => 'btn btn-info btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>