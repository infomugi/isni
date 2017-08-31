<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	'Tambah',
	);

$this->pageTitle='Tambah Dokumen Pedoman Teknis';
?>

<?php echo $this->renderPartial('_form_create_petunjuk_teknis', array('model'=>$model)); ?>