<?php
/* @var $this Sub Panitia TeknisController */
/* @var $model Sub Panitia Teknis */

$this->breadcrumbs=array(
	'Sub Panitia Tekniss'=>array('index'),
	$model->KD_SUBPATEK=>array('view','id'=>$model->KD_SUBPATEK),
	'Edit',
	);

	$this->pageTitle='Edit Sub Panitia Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>