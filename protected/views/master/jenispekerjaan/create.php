<?php
/* @var $this Jenis PekerjaanController */
/* @var $model Jenis Pekerjaan */

$this->breadcrumbs=array(
	'Jenis Pekerjaans'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Jenis Pekerjaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>