<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */

$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	$model->TITLE=>array('view','id'=>$model->MULTIMEDIA_ID),
	'Edit',
	);

	$this->pageTitle='Edit Multimedia';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>