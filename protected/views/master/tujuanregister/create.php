<?php
/* @var $this Tujuan RegisterController */
/* @var $model Tujuan Register */

$this->breadcrumbs=array(
	'Tujuan Registers'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Tujuan Register';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>