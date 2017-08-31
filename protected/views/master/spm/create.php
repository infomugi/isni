<?php
/* @var $this SPMController */
/* @var $model SPM */

$this->breadcrumbs=array(
	'SPMs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add SPM';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>