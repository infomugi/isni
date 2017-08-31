<?php
/* @var $this Regulasi TeknisController */
/* @var $model Regulasi Teknis */

$this->breadcrumbs=array(
	'Regulasi Teknises'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Regulasi Teknis';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>