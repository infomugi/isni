<?php
/* @var $this SPMController */
/* @var $model SPM */

$this->breadcrumbs=array(
	'SPMs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit SPM';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>