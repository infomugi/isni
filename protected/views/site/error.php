<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=CHtml::encode(Setting::model()->name()) . ' - Error';
$this->breadcrumbs=array(
	'Error',
	);
	?>
	<!doctype html>
	<html class="no-js" lang="">
	<head>
		<?php
		$baseUrl = Yii::app()->theme->baseUrl; 
		$url = Yii::app()->baseUrl."/index.php?r="; 
		$cs = Yii::app()->getClientScript();
		Yii::app()->clientScript->registerCoreScript('jquery');
		?>

		<meta charset="utf-8">
		<meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

		<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>

		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/offline/theme.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/pace/theme.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/panel.css">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/skins/palette.4.css" id="skin">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/fonts/style.1.css" id="font">
		<link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/main.css">


    <!--[if lt IE 9]>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo $baseUrl;?>/backend/vendor/modernizr.js"></script>

    </head>

    
    <body class="center-wrapper">

    	<div class="center-content text-center">
    		<div class="error-number"><?php echo $code; ?></div>
    		<div class="mg-b-lg">Selamat Anda Menemukan Halaman <?php echo $code; ?></div>
    		<p><?php echo CHtml::encode($message); ?>
    		</p>
    	</div>

    	<script src="<?php echo $baseUrl;?>/backend/bootstrap/js/bootstrap.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/vendor/jquery.easing.min.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/vendor/jquery.placeholder.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/vendor/fastclick.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/vendor/offline/offline.min.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/vendor/pace/pace.min.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/js/off-canvas.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/js/main.js"></script>
    	<script src="<?php echo $baseUrl;?>/backend/js/panel.js"></script>

    	</html>
