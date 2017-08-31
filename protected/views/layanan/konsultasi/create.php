<?php
/* @var $this KonsultasiController */
/* @var $model Konsultasi */

$this->breadcrumbs=array(
	'Konsultasis'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Konsultasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>