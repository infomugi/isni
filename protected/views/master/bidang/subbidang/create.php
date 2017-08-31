<?php
/* @var $this Sub BidangController */
/* @var $model Sub Bidang */

$this->breadcrumbs=array(
	'Tb List Kategoris'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Sub Bidang';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>