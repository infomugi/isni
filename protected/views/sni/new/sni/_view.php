<?php
/* @var $this SniController */
/* @var $data Sni */
?>

<div class="col-xs-12">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->judul), array('view', 'id'=>$data->id_standar)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'no_nspm',
						'tahun',
						'ruanglingkup',
						'jumlah_hal',
						),
						)); ?>
						
						<?php echo Sni::model()->remove($data->file_isi); ?> - 	<?php echo Sni::model()->remove($data->file_ringkasan); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
