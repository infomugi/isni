<?php
/* @var $this Advis TeknisController */
/* @var $model Advis Teknis */

$this->breadcrumbs=array(
	'Advis Teknises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Advis Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>