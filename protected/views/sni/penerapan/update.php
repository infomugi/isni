<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */

$this->breadcrumbs=array(
	'Penerapan Snis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

$this->pageTitle='Edit Penerapan SNI';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'model2'=>$model2)); ?>