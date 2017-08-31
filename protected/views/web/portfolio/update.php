<?php
/* @var $this PortfolioController */
/* @var $model Portfolio */

$this->breadcrumbs=array(
	'Portfolios'=>array('index'),
	$model->name=>array('view','id'=>$model->id_portfolio),
	'Edit',
	);

	$this->pageTitle='Edit Portfolio';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>