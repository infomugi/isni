<?php
/* @var $this StreamController */
/* @var $model Stream */

$this->breadcrumbs=array(
	'Streams'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Stream';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>