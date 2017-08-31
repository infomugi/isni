<?php
/* @var $this SmmController */
/* @var $model Smm */

$this->breadcrumbs=array(
	'Smms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Smm';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>