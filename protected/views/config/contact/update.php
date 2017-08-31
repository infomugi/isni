<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->title=>array('view','id'=>$model->id_contact),
	'Edit',
	);

	$this->pageTitle='Edit Contact';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>