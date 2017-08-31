<?php
/* @var $this Sub Panitia TeknisController */
/* @var $data Sub Panitia Teknis */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->KD_SUBPATEK), array('view', 'id'=>$data->KD_SUBPATEK)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'KD_SUBPATEK',
		'KD_PATEK',
		'NM_SUBPATEK',
		'JAWAB',
		'KODE_SUBPATEK',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
