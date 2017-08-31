<?php
/* @var $this Penerapan SNIController */
/* @var $model Penerapan SNI */

$this->breadcrumbs=array(
	'Penerapan Snis'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Penerapan SNI';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model,'model2'=>$model2)); ?>