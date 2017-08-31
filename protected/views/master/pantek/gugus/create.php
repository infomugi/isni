<?php
/* @var $this Gugus KerjaController */
/* @var $model Gugus Kerja */

$this->breadcrumbs=array(
	'Gugus Kerjaes'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Gugus Kerja';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>