<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */

$this->breadcrumbs=array(
	'Jenis Standars'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Jenis Standar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>