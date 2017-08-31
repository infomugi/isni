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

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="http://yadcf-showcase.appspot.com/resources/css/jquery.dataTables.yadcf.css" rel="stylesheet" type="text/css" />
    <link href="http://yadcf-showcase.appspot.com/resources/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo $baseUrl;?>/frontend/style.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/themetypo.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/color.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/jquery.bxslider.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/bootstrap-slider.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/widget.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/css/responsive.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/frontend/js/dl-menu/component.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="<?php echo $baseUrl;?>/frontend/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="<?php echo $baseUrl;?>/frontend/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!-- <div id="loader-wrapper">
  <div id="loader"></div>

  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>

</div> -->