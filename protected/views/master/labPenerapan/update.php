<?php
/* @var $this Laboratorium PenerapanController */
/* @var $model Laboratorium Penerapan */

$this->breadcrumbs=array(
	'Lab Penerapans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Laboratorium Penerapan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>