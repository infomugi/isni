<?php
/* @var $this Monev StandardController */
/* @var $model Monev Standard */

$this->breadcrumbs=array(
	'Monev Standards'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Monev Standard';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>