<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
	);

$this->pageTitle=$model->title;
?>


<div class="post-article-area">
  <div class="classic-post-item">
    <div class="post-header">
      <h2><?php echo $model->title; ?></h2>
    </div>
    <div class="post-entry">
      <p><?php echo $model->description; ?></p>
    </div>


  </div>

<div class="post-about clearfix">
  <div class="post-about-top"><a href="#">Tentang <?PHP echo Setting::model()->name(); ?></a></div>
  <div class="post-about-img">
   <img src="<?PHP echo YII::app()->baseUrl."/image/setting/".Setting::model()->logo(); ?>" alt="logo">
 </div>
 <div class="post-about-content">
  <p><?PHP echo Setting::model()->description(); ?></p>
</div>
</div>

</div>

<HR>


