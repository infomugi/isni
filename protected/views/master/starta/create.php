<?php
/* @var $this StartaController */
/* @var $model Starta */

$this->breadcrumbs=array(
	'Startas'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Starta';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>