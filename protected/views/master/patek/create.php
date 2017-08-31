<?php
/* @var $this PatekController */
/* @var $model Patek */

$this->breadcrumbs=array(
	'Pateks'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Patek';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>