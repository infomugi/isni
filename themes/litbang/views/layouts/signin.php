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

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/offline/theme.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/pace/theme.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/panel.css">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/skins/palette.10.css" id="skin">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/fonts/style.2.css" id="font">
  <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/main.css">


    <!--[if lt IE 9]>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo $baseUrl;?>/backend/vendor/modernizr.js"></script>

      </head>

      <body class="bg-color center-wrapper">

        <?php echo $content; ?>

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
