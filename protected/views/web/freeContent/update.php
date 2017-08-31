<?php
/* @var $this Free ContentController */
/* @var $model Free Content */

$this->breadcrumbs=array(
	'Free Contents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Free Content';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>