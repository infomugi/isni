<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Standar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>