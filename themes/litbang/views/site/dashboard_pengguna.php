<?php
$this->pageTitle= "Profile ";
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


						<!--SECTION CONTENT START-->
						<div class="section-heading-1">
							<h2>Pilih Layanan</h2>
						</div>
						<!--SECTION CONTENT END-->
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-4">
								<div class="kode-service-3">
									<i class="fa fa-gift"></i>
									<h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/konsultasi">Konsultasi</a></h3>
									<p>Konsultasi Seputar Standar SNI, Petunjuk Teknis dan Pedoman Teknis</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-4">
								<div class="kode-service-3">
									<i class="fa fa-book"></i>
									<h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/bukutamu">Buku Tamu</a></h3>
									<p>Layanan Feedback untuk Sistem Informasi Manajemen Standar.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-4">
								<div class="kode-service-3">
									<i class="fa fa-calculator"></i>
									<h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/kuesioner">Kuesioner</a></h3>
									<p>Layanan Kuesioner untuk Sistem Informasi Manajemen Standar.</p>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
			<div class="col-md-4 sidebar">
				<div class="widget widget-text">
					<h2>Dashboard</h2>
					<p>Selamat Datang di Website <?php echo Setting::model()->description(); ?></p>
				</div>
				<div class="widget widget-text">
					<h2>Profile</h2>
					<ul>
						<li><i class="fa fa-user"></i><p><?php echo $model->Nama; ?></p></li>
						<li><i class="fa fa-envelope"></i><p><?php echo $model->Email; ?></p></li>
						<li><i class="fa fa-map-marker"></i><p><?php echo $model->Alamat; ?></p></li>
					</ul>					
				</div>
			</div>
		</div>
	</div>
</div> 

