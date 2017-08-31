<?php
/* @var $this Jenis StatusController */
/* @var $model Jenis Status */

$this->breadcrumbs=array(
	'Jenis Statuses'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Jenis Status';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>