<?php
/* @var $this SosialisasiController */
/* @var $model Sosialisasi */

$this->breadcrumbs=array(
	'Sosialisasis'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Sosialisasi';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>