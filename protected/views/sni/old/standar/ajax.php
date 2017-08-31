<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	$model->NO_ID=>array('view','id'=>$model->NO_ID),
	'Edit',
	);

$this->pageTitle='Edit Standar';
?>

<?php echo $this->renderPartial('_form_ajax', array('model'=>$model)); ?>