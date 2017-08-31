<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Services';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>