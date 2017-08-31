<?php
/* @var $this Advis TeknisController */
/* @var $model Advis Teknis */

$this->breadcrumbs=array(
	'Advis Teknises'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Advis Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>