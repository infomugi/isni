<?php
/* @var $this Legal AspekController */
/* @var $model Legal Aspek */

$this->breadcrumbs=array(
	'Legal Aspeks'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Legal Aspek';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>