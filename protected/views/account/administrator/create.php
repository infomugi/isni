<?php
/* @var $this AdministratorController */
/* @var $model Administrator */

$this->breadcrumbs=array(
	'Administrators'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Administrator';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>