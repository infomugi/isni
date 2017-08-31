<?php
/* @var $this Tujuan RegisterController */
/* @var $model Tujuan Register */

$this->breadcrumbs=array(
	'Tujuan Registers'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

	$this->pageTitle='Edit Tujuan Register';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>