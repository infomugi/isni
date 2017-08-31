<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
	);

$link = Yii::app()->baseUrl."/article/".$model->url;

$this->pageTitle=$model->title;
$this->tags=$model->tags;
$this->keyword=$model->keyword;

$this->url=$link;
$this->image=$model->image;
?>


<!--BANNER START-->
<div class="kode-inner-banner">
  <div class="kode-page-heading">
    <h2><?php echo $this->pageTitle; ?></h2>
  </div>

</div>

<!--CONTENT START-->
<div class="kode-content">
  <!--BOOK GUIDE SECTION START-->
  <section class="kode-services-section">
    <div class="container">
      <!--SECTION CONTENT END-->
      <div class="row">
        <div class="col-md-12">

          <div class="post-entry" style="text-align:justify">
            <p><?php echo $model->description; ?></p>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--BOOK GUIDE SECTION END-->
