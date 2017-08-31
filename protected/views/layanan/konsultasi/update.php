<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */

$this->breadcrumbs=array(
	'Konsultasis'=>array('index'),
	$model->id_konsultasi=>array('view','id'=>$model->id_konsultasi),
	'Edit',
	);

	$this->pageTitle='Edit Konsultasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>