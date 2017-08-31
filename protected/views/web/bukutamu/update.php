<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Bukutamus'=>array('index'),
	$model->no_message=>array('view','id'=>$model->no_message),
	'Edit',
	);

	$this->pageTitle='Edit Bukutamu';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>