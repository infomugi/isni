  <?php
  $baseUrl = Yii::app()->theme->baseUrl; 
  $url = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerCoreScript('jquery');
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo Setting::model()->name(); ?></title>
    <meta name="description" content="<?php echo Setting::model()->description(); ?>"/>
    <meta name="keywords" content="<?php echo Setting::model()->keywords(); ?>"/>
    <link rel="shortcut icon" href="<?php echo $url;?>/image/setting/<?php echo Setting::model()->favicon(); ?>">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/font-awesome.min.css">
    <link href="<?php echo $baseUrl;?>/frontend/style.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/color.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/bootstrap-slider.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/widget.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/responsive.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/js/dl-menu/component.css" rel="stylesheet">

  </head>
  <body>

