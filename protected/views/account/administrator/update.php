<?php
/* @var $this AdministratorController */
/* @var $model Administrator */

$this->breadcrumbs=array(
	'Administrators'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Edit',
	);

	$this->pageTitle='Edit Administrator';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>