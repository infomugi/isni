<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	'Tambah',
	);

$this->pageTitle='Tambah Dokumen Sni';
?>

<?php echo $this->renderPartial('_form_create_sni', array('model'=>$model)); ?>