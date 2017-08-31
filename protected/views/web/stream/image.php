<?php
/* @var $this MapsController */
/* @var $model Maps */

$this->breadcrumbs=array(
	'Maps'=>array('index'),
	$model->name=>array('view','id'=>$model->id_stream),
	'Edit',
	);

	$this->pageTitle='Edit Maps';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>