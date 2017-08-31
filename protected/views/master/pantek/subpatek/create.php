<?php
/* @var $this Sub Panitia TeknisController */
/* @var $model Sub Panitia Teknis */

$this->breadcrumbs=array(
	'Sub Panitia Tekniss'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Sub Panitia Teknis';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>