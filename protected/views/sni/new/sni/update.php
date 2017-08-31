<?php
/* @var $this SniController */
/* @var $model Sni */

$this->breadcrumbs=array(
	'Snis'=>array('index'),
	$model->id_standar=>array('view','id'=>$model->id_standar),
	'Update',
	);

	$this->pageTitle='Edit Sni';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>