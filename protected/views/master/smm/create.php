<?php
/* @var $this SmmController */
/* @var $model Smm */

$this->breadcrumbs=array(
	'Smms'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Smm';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>