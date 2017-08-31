<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->breadcrumbs=array(
	'Kuesioners'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Kuesioner';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>