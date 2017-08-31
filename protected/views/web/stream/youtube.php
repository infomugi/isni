<?php
/* @var $this StreamController */
/* @var $model Stream */

$this->breadcrumbs=array(
	'Streams'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Video Gallery';
	?>

	<?php echo $this->renderPartial('_form_youtube', array('model'=>$model)); ?>