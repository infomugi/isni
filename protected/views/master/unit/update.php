<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Units'=>array('index'),
	$model->KD_UNIT=>array('view','id'=>$model->KD_UNIT),
	'Edit',
	);

	$this->pageTitle='Edit Unit';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>