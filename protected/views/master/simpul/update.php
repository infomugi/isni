<?php
/* @var $this SimpulController */
/* @var $model Simpul */

$this->breadcrumbs=array(
	'Simpuls'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

	$this->pageTitle='Edit Simpul';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>