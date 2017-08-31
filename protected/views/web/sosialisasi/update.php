<?php
/* @var $this SosialisasiController */
/* @var $model Sosialisasi */

$this->breadcrumbs=array(
	'Sosialisasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Sosialisasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>