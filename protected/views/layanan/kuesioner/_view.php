<?php
/* @var $this KuesionerController */
/* @var $data Kuesioner */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_kuesioner), array('view', 'id'=>$data->id_kuesioner)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_kuesioner',
		'tanggal_kuesioner',
		'user_id',
		'soal_1',
		'soal_2',
		'soal_3',
		'soal_4',
		'soal_5',
		'soal_6',
		'soal_7',
		'soal_8',
		'soal_9',
		'soal_10',
		'soal_11',
		'soal_12',
		'soal_13',
		'soal_14',
		'soal_15',
		'keterangan',
		'status',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
