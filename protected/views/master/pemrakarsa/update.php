<?php
/* @var $this PemrakarsaController */
/* @var $model Pemrakarsa */

$this->breadcrumbs=array(
	'Pemrakarsas'=>array('index'),
	$model->KD_DANA=>array('view','id'=>$model->KD_DANA),
	'Edit',
	);

	$this->pageTitle='Edit Pemrakarsa';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>