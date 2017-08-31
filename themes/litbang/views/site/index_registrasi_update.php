<?php
$this->pageTitle= "Edit Registrasi";
?>

<!--BANNER START-->
<div class="kode-inner-banner">
	<div class="kode-page-heading">
		<h2><?php echo $this->pageTitle; ?></h2>
	</div>
</div>

<!--CONTENT START-->
<div class="kode-content padding-tb-50">
	<div class="container">

		<!--LOCATION MAP END-->
		<div class="row">
			<div class="col-md-8">
				<div class="comment-form">
					<div class="row">

						<?php echo $this->renderPartial('_form_registrasi_update', array('model'=>$model)); ?>

					</div>
				</div>
			</div>
			<div class="col-md-4 sidebar">
				<div class="widget widget-text">
					<h2>Tentang Kami</h2>
					<p><?php echo Setting::model()->description(); ?></p>
				</div>
				<div class="widget widget-text">
					<h2>Information</h2>
					<ul>
						<li><i class="fa fa-map"></i><p><?php echo Setting::model()->address(); ?></p></li>
						<li><i class="fa fa-phone"></i><p><?php echo Setting::model()->phone(); ?></p></li>
						<li><i class="fa fa-envelope-o"></i><p><a href="mailto:<?php echo Setting::model()->email(); ?>"><?php echo Setting::model()->email(); ?></a></p></li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
</div> 

