<?php
/* @var $this Jenis PekerjaanController */
/* @var $model Jenis Pekerjaan */

$this->breadcrumbs=array(
	'Jenis Pekerjaans'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

$this->pageTitle='Edit Jenis Pekerjaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>