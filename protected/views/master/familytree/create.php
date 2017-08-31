<?php
/* @var $this Family TreeController */
/* @var $model Family Tree */

$this->breadcrumbs=array(
	'Family Trees'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Family Tree';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>