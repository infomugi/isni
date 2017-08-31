<?php
/* @var $this Legal AspekController */
/* @var $model Legal Aspek */

$this->breadcrumbs=array(
	'Legal Aspeks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Legal Aspek';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>