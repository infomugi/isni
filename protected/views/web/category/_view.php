<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<i class="fa <?php echo $data->icon; ?>"></i> <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_category)); ?>
				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'name',
						'icon',
						array('name'=>'status','value'=>User::model()->status($data->status))
						),
						)); ?>


					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
