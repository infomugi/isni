<?php
/* @var $this BukutamuController */
/* @var $data Bukutamu */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode(strtoupper($data->NAMA)), array('view', 'id'=>$data->no_message)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'NAMA',
						'KOTA',
						'KOMENTAR',
						'TGLPOST',
						// 'EMAIL',
						// 'HOMEPAGE',
						// 'IP',
						// 'status',
						// 'balasan',
						// 'no_message',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
