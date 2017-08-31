<?php
/* @var $this BidangController */
/* @var $data Bidang */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->kd_bidang), array('view', 'id'=>$data->kd_bidang)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'kd_bidang',
		'nm_bidang',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
