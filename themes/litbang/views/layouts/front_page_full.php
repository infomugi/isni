<!-- Header -->
<?php include_once('front/tpl_asset_header_page.php');?>

<!-- Navigation -->
<?php include_once('front/tpl_navigation.php');?>


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
			<div class="col-md-12">
				<div class="comment-form">
					<div class="row">

						<?PHP echo $content; ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</div> 


<!-- Footer -->
<?php include_once('front/tpl_footer.php');?>

<!-- Asset Footer -->
<?php include_once('front/tpl_asset_footer.php');?>