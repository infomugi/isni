<?php
/* @var $this Laboratorium PenerapanController */
/* @var $model Laboratorium Penerapan */

$this->breadcrumbs=array(
	'Lab Penerapans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Laboratorium Penerapan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>