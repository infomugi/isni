<?php
/* @var $this Jenis StatusController */
/* @var $model Jenis Status */

$this->breadcrumbs=array(
	'Jenis Statuses'=>array('index'),
	$model->KD_JENISSTATUS=>array('view','id'=>$model->KD_JENISSTATUS),
	'Edit',
	);

$this->pageTitle='Edit Jenis Status';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>