<?php
/* @var $this ContactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Contact';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>