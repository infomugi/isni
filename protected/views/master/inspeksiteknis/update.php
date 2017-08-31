<?php
/* @var $this Inspeksi TeknisController */
/* @var $model Inspeksi Teknis */

$this->breadcrumbs=array(
	'Inspeksi Teknises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Inspeksi Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>