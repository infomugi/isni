<?php
/* @var $this Bidang PekerjaanController */
/* @var $model Bidang Pekerjaan */

$this->breadcrumbs=array(
	'Bidang Pekerjaans'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

$this->pageTitle='Edit Bidang Pekerjaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>