<?php
/* @var $this Jenis StandarController */
/* @var $data Jenis Standar */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->KD_JENIS_STANDAR), array('view', 'id'=>$data->KD_JENIS_STANDAR)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'KD_JENIS_STANDAR',
		'NM_JENIS_STANDAR1',
		'NM_JENIS_STANDAR2',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
