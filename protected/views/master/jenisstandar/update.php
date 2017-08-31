<?php
/* @var $this Jenis StandarController */
/* @var $model Jenis Standar */

$this->breadcrumbs=array(
	'Jenis Standars'=>array('index'),
	$model->KD_JENIS_STANDAR=>array('view','id'=>$model->KD_JENIS_STANDAR),
	'Edit',
	);

	$this->pageTitle='Edit Jenis Standar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>