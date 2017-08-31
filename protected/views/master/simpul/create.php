<?php
/* @var $this SimpulController */
/* @var $model Simpul */

$this->breadcrumbs=array(
	'Simpuls'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Simpul';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>