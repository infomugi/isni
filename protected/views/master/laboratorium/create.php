<?php
/* @var $this LaboratoriumController */
/* @var $model Laboratorium */

$this->breadcrumbs=array(
	'Laboratoria'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Laboratorium';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>