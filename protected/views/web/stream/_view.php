<?php
/* @var $this StreamController */
/* @var $data Stream */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_stream)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<a rel="nofollow" href="http://50.47.66.157:80/" target="new"><img id="image0" src="<?php echo $data->url; ?>" class="img-responsive img-rounded detailimage" alt="" title="<?php echo $data->name; ?>"/></a>
				<script>
					var ch = 0;
					var imageurls = new Array();
					imageurls[0] = new String("<?php echo $data->url; ?>");
				</script>

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
