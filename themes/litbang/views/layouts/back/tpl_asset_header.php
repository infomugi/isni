<!doctype html>
<html class="no-js" lang="">
<head>
    <?php
    $baseUrl = Yii::app()->theme->baseUrl; 
    $url = Yii::app()->baseUrl."/"; 
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Setting::model()->name()); ?></title>

    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/offline/theme.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/pace/theme.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/panel.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/skins/palette.3.css" id="skin">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/main.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/notie/notie.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/datatables/jquery.dataTables.min.css">
    <link href="<?php echo $baseUrl;?>/backend/vendor/summernote/dist/summernote.css" rel="stylesheet">
    <link href="<?php echo $baseUrl;?>/backend/vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl;?>/backend/vendor/tagsinput/jquery.tagsinput.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $url;?>image/setting/<?php echo Setting::model()->favicon(); ?>">

    <!--[if lt IE 9]>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="<?php echo $baseUrl;?>/backend/vendor/modernizr.js"></script>
        
    </head>

    <body>

        