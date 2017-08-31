<?php
/* @var $this PadananController */
/* @var $model Padanan */

$this->breadcrumbs=array(
	'Tb Padanans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Padanan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>