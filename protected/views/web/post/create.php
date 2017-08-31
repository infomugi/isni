<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Baru',
	);

$this->pageTitle='Posting Baru';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>