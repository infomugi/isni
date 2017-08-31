<?php
/* @var $this Inspeksi TeknisController */
/* @var $model Inspeksi Teknis */

$this->breadcrumbs=array(
	'Inspeksi Teknises'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Inspeksi Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>