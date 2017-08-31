<?php
/* @var $this IstilahController */
/* @var $model Istilah */

$this->breadcrumbs=array(
	'Istilahs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Istilah';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>