<?php
/* @var $this Bidang PekerjaanController */
/* @var $model Bidang Pekerjaan */

$this->breadcrumbs=array(
	'Bidang Pekerjaans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bidang Pekerjaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>