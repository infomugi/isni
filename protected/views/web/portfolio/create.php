<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */

$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Portfolio';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>