<?php
/* @var $this DanaController */
/* @var $model Dana */

$this->breadcrumbs=array(
	'Danas'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Dana';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>