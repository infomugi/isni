<?php
/* @var $this Regulasi TeknisController */
/* @var $model Regulasi Teknis */

$this->breadcrumbs=array(
	'Regulasi Teknises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

$this->pageTitle='Edit Regulasi Teknis';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>