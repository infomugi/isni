<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Units'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Unit';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>