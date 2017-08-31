<?php

$this->pageTitle= "Kegiatan - ".$model->name;
?>

<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
</div>


<!--BANNER END-->
<div class="kode-content padding-tb-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<section class="kode-author-detail-2">
					<div class="container">


						<div class="row">
							<div class="col-md-12">

								<?php $this->widget('zii.widgets.CDetailView', array(
									'data'=>$model,
									'htmlOptions'=>array("class"=>"table"),
									'attributes'=>array(
										'created_date',
										'name',
										'description',
										'start_date',
										'end_date',
										'time',
										'location',
										),
										)); ?>

									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>									


