<?php
/* @var $this BidangController */
/* @var $model Bidang */

$this->breadcrumbs=array(
	'Mst Bidangs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bidang';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>