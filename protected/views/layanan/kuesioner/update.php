<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->breadcrumbs=array(
	'Kuesioners'=>array('index'),
	$model->id_kuesioner=>array('view','id'=>$model->id_kuesioner),
	'Edit',
	);

	$this->pageTitle='Edit Kuesioner';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>