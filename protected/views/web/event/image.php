<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name=>array('view','id'=>$model->id_event),
	'Edit',
	);

$this->pageTitle='Edit Image';
?>

<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>