<?php
/* @var $this PemrakarsaController */
/* @var $model Pemrakarsa */

$this->breadcrumbs=array(
	'Pemrakarsas'=>array('index'),
	'Add',
	);

$this->pageTitle='Add Pemrakarsa';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>