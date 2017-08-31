<?php
/* @var $this Tanda Tangan PemesanController */
/* @var $model Tanda Tangan Pemesan */

$this->breadcrumbs=array(
	'Tanda Tangan Pemesans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Tanda Tangan Pemesan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>