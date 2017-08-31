<?php
/* @var $this StartaController */
/* @var $model Starta */

$this->breadcrumbs=array(
	'Startas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Starta';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>