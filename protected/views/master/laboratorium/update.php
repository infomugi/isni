<?php
/* @var $this LaboratoriumController */
/* @var $model Laboratorium */

$this->breadcrumbs=array(
	'Laboratoria'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Laboratorium';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>