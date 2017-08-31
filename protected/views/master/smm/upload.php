<?php
/* @var $this SmmController */
/* @var $model Smm */

$this->breadcrumbs=array(
	'Smms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Upload Dokumen Smm';
	?>

	<?php echo $this->renderPartial('_form_upload', array('model'=>$model)); ?>