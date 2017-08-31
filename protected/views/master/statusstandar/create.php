<?php
/* @var $this Status StandarController */
/* @var $model Status Standar */

$this->breadcrumbs=array(
	'Status Standars'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Status Standar';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>