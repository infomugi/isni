<?php
/* @var $this Status StandarController */
/* @var $model Status Standar */

$this->breadcrumbs=array(
	'Status Standars'=>array('index'),
	$model->KD_KATEGORI=>array('view','id'=>$model->KD_KATEGORI),
	'Edit',
	);

$this->pageTitle='Edit Status Standar';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>