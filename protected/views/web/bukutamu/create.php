<?php
/* @var $this BukutamuController */
/* @var $model Bukutamu */

$this->breadcrumbs=array(
	'Bukutamus'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bukutamu';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>