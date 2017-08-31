<?php
/* @var $this ServicesController */
/* @var $model Services */

$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Services';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Services'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Services'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Services'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_services,
						), array('class' => 'btn btn-info', 'title'=>'Edit Services'));
						?>

						<HR>

							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'name',
									'icon',
									'description',
									'url',
									array('name'=>'status','value'=>User::model()->status($model->status))
									),
									)); ?>

								</section>

								<STYLE>
									th{width:150px;}
								</STYLE>

