<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Sni';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>