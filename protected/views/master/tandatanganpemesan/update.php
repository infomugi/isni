<?php
/* @var $this Tanda Tangan PemesanController */
/* @var $model Tanda Tangan Pemesan */

$this->breadcrumbs=array(
	'Tanda Tangan Pemesans'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Edit',
	);

	$this->pageTitle='Edit Tanda Tangan Pemesan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>