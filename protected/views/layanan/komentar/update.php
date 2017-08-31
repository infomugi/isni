<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	$model->id_komentar=>array('view','id'=>$model->id_komentar),
	'Edit',
	);

	$this->pageTitle='Edit Komentar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>