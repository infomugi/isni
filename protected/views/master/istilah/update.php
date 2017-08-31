<?php
/* @var $this IstilahController */
/* @var $model Istilah */

$this->breadcrumbs=array(
	'Istilahs'=>array('index'),
	$model->id_istilah=>array('view','id'=>$model->id_istilah),
	'Edit',
	);

	$this->pageTitle='Edit Istilah';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>