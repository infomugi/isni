<?php
/* @var $this PadananController */
/* @var $model Padanan */

$this->breadcrumbs=array(
	'Tb Padanans'=>array('index'),
	$model->KD_PADANAN=>array('view','id'=>$model->KD_PADANAN),
	'Edit',
	);

	$this->pageTitle='Edit Padanan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>