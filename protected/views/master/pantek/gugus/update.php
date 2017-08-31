<?php
/* @var $this Gugus KerjaController */
/* @var $model Gugus Kerja */

$this->breadcrumbs=array(
	'Gugus Kerjaes'=>array('index'),
	$model->KD_GUGUS=>array('view','id'=>$model->KD_GUGUS),
	'Edit',
	);

	$this->pageTitle='Edit Gugus Kerja';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>