<?php
/* @var $this MultimediaController */
/* @var $model Multimedia */

$this->breadcrumbs=array(
	'Multimedias'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Multimedia';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>