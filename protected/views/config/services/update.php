<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->name=>array('view','id'=>$model->id_services),
	'Edit',
	);

	$this->pageTitle='Edit Services';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>