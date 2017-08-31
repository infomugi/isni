<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */

$this->breadcrumbs=array(
	'Konsultasis'=>array('index'),
	'Add',
	);

$this->pageTitle='Konsultasi';
?>

<?php echo $this->renderPartial('_form_konsultasi', array('model'=>$model)); ?>