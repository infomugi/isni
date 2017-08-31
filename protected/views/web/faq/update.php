<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->breadcrumbs=array(
	'Faqs'=>array('index'),
	$model->ID_FAQ=>array('view','id'=>$model->ID_FAQ),
	'Edit',
	);

	$this->pageTitle='Edit Faq';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>