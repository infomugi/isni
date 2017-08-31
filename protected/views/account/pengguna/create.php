<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Pengguna';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>