<?php
/* @var $this Free ContentController */
/* @var $model Free Content */

$this->breadcrumbs=array(
	'Free Contents'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Free Content';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>