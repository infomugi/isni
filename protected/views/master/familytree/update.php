<?php
/* @var $this Family TreeController */
/* @var $model Family Tree */

$this->breadcrumbs=array(
	'Family Trees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Family Tree';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>