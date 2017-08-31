<?php
/* @var $this KomentarController */
/* @var $data Komentar */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_komentar), array('view', 'id'=>$data->id_komentar)); ?>
	<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$data,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
							'id_komentar',
		'tanggal_komentar',
		'pengguna_id',
		'standar_id',
		'deskripsi',
		'tanggal_jawab',
		'admin_id',
		'jawaban',
		'status',
		'like',
		'unlike',
					),
					)); ?>

				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
