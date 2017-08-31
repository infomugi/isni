<?php
/* @var $this Monev StandardController */
/* @var $model Monev Standard */

$this->breadcrumbs=array(
	'Monev Standards'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Monev Standard';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>