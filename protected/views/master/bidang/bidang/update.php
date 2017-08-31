<?php
/* @var $this BidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Mst Bidangs'=>array('index'),
	$model->kd_bidang=>array('view','id'=>$model->kd_bidang),
	'Edit',
	);

	$this->pageTitle='Edit Bidang';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>