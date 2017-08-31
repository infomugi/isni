<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Komentar';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>