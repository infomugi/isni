<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Page',
	);

	$this->pageTitle='New Page';
	?>

	<?php echo $this->renderPartial('_form_page', array('model'=>$model)); ?>