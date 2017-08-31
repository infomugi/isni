<?php
/* @var $this Sub BidangController */
/* @var $data Sub Bidang */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->KD_LIST_KATEGORI), array('view', 'id'=>$data->KD_LIST_KATEGORI)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'KD_LIST_KATEGORI',
						'NM_LIST_KATEGORI1',
						'NM_LIST_KATEGORI2',
						'kd_bidang',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
