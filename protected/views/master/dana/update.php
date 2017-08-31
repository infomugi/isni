<?php
/* @var $this DanaController */
/* @var $model Dana */

$this->breadcrumbs=array(
	'Danas'=>array('index'),
	$model->KD_DANA=>array('view','id'=>$model->KD_DANA),
	'Edit',
	);

	$this->pageTitle='Edit Dana';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>