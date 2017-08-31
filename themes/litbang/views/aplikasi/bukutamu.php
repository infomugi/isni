<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Bukutamus'=>array('index'),
	'Isi',
	);

$this->pageTitle='Isi Bukutamu';
?>

<?php echo $this->renderPartial('_form_bukutamu', array('model'=>$model)); ?>