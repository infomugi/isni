<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	$model->no_nspm=>array('view','id'=>$model->no_nspm),
	'Edit',
	);

$this->pageTitle='Upload Isi - '.$model->no_nspm;
?>

<?php echo $this->renderPartial('_form_upload_isi', array('model'=>$model)); ?>