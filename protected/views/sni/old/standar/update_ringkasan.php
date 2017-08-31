<?php
/* @var $this StandarController */
/* @var $model Standar */

$this->breadcrumbs=array(
	'Standars'=>array('index'),
	$model->NO_ID=>array('view','id'=>$model->NO_ID),
	'Edit',
	);

$this->pageTitle='Upload Isi - '.$model->NO_NSPM;
?>

<?php echo $this->renderPartial('_form_upload_ringkasan', array('model'=>$model)); ?>