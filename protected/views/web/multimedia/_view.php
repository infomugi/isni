<?php
/* @var $this MultimediaController */
/* @var $data Multimedia */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->TITLE), array('view', 'id'=>$data->MULTIMEDIA_ID)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'TITLE',
						'DESCRIPTION',
						// 'FILE_DATE',
						'FILE_TYPE',
						'FILE_NAME',
						// 'STATUS',
						// 'C_DATE',
						// 'C_UID',
						// 'M_DATE',
						// 'M_UID',
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
