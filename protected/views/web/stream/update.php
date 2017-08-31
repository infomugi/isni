<?php
/* @var $this StreamController */
/* @var $model Stream */

$this->breadcrumbs=array(
	'Streams'=>array('index'),
	$model->name=>array('view','id'=>$model->id_stream),
	'Edit',
	);

	$this->pageTitle='Edit Stream';
	?>

	<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>