<?php
/* @var $this PatekController */
/* @var $model Patek */

$this->breadcrumbs=array(
	'Pateks'=>array('index'),
	$model->KD_PATEK=>array('view','id'=>$model->KD_PATEK),
	'Edit',
	);

	$this->pageTitle='Edit Patek';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>