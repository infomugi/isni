<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

	$this->pageTitle='Edit Pengguna';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>