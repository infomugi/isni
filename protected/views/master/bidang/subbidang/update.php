<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */

$this->breadcrumbs=array(
	'Tb List Kategoris'=>array('index'),
	$model->KD_LIST_KATEGORI=>array('view','id'=>$model->KD_LIST_KATEGORI),
	'Edit',
	);

	$this->pageTitle='Edit Sub Bidang';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>