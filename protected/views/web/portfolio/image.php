<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */

$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->name=>array('view','id'=>$model->id_portfolio),
	'Image',
	);

	$this->pageTitle='Image Portfolio';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>