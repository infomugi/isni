<?php
/* @var $this KuesionerController */
/* @var $model Kuesioner */

$this->breadcrumbs=array(
	'Kuesioners'=>array('index'),
	'Add',
	);

$this->pageTitle='Kuesioner';
?>

<?php echo $this->renderPartial('_form_kuesioner', array('model'=>$model)); ?>