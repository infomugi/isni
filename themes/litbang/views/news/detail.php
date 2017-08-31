<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl; 
$this->pageTitle='News';
?> 
<div class="post-article-area">
  <div class="classic-post-item">
    <div class="post-img">
      <a href="#"><img src="img/post/post1.jpg" alt=""></a>
      <div class="post-img-content">
        <h5>
          <span>Breakfast/ Vegetarian</span>
          <span>March 18, 2016</span>
        </h5>
      </div>
    </div>
    <div class="post-header">
      <h2><?php echo $model->name; ?></h2>
    </div>
    <div class="post-entry">
      <p><?php echo $model->description; ?></p>
    </div>


    <div class="post-meta">
      <div class="meta-comments">
        <a href="#">4<i class="fa fa-heart-o"></i></a>
        <a href="#">25<i class="fa fa-comment-o"></i></a>
      </div>
      <div class="meta-info">
        <span class="meta-text">April 2, 2016</span>
        <span class="meta-text">By</span>
        <span class="meta-text"><a href="#">Blogfair</a></span>
      </div>
      <div class="post-share">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
      </div>
    </div>
  </div>
  <div class="prev-next-post">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="prev-post">
          <h4><a href="#">PRV POST</a></h4>
          <div class="prev-img">
            <a href="#"><img src="img/banner/prev.jpg" alt=""></a>
            <h5>
              <a href="#">Desserts</a>
              <a href="#">March 18, 2016</a>
            </h5>
          </div>
          <div class="prev-content">
            <h3><a href="#">Autumn Tabbouleh with Cauliflower, Carrots</a></h3>
            <span>April 2, 2016</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12">
        <div class="prev-post next-post">
          <h4><a href="#">NEXT POST</a></h4>
          <div class="prev-img next-img">
            <a href="#"><img src="img/banner/next.jpg" alt=""></a>
            <h5>
              <a href="#">Desserts</a>
              <a href="#">March 18, 2016</a>
            </h5>
          </div>
          <div class="prev-content next-content">
            <h3><a href="#">Autumn Salad With With Horeseraddish Vinnet</a></h3>
            <span>April 2, 2016</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="post-about clearfix">
    <div class="post-about-top"><a href="#">Abaout blogfair</a></div>
    <div class="post-about-img">
      <img src="img/banner/post-about.jpg" alt="">
    </div>
    <div class="post-about-content">
      <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cu</p>
    </div>
  </div>
  <div class="also-like-area">
    <h4>Recent Trending Topics</h4>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-col3 mar-bot-35">
          <div class="col2-img post-img">
            <a href="#"><img src="img/post/stan1.jpg" alt=""></a>
            <div class="post-img-content">
              <h5>
                <span>Deserts</span>
                <span>March 18, 2016</span>
              </h5>
            </div>
          </div>
          <div class="col2-content">
            <h4><a href="#">Autumn Tabbouleh with Cauliflower, Carrots</a></h4>
            <p>Looking for a special holiday side? Here’s a festive</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-col3 mar-bot-35">
          <div class="col2-img post-img">
            <a href="#"><img src="img/post/stan2.jpg" alt=""></a>
            <div class="post-img-content">
              <h5>
                <span>Deserts</span>
                <span>March 18, 2016</span>
              </h5>
            </div>
          </div>
          <div class="col2-content">
            <h4><a href="#">Summer Squash Green Chile Stir Fry</a></h4>
            <p>Looking for a special holiday side? Here’s a festive</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-col3 mar-bot-35">
          <div class="col2-img post-img">
            <a href="#"><img src="img/post/stan3.jpg" alt=""></a>
            <div class="post-img-content">
              <h5>
                <span>Deserts</span>
                <span>March 18, 2016</span>
              </h5>
            </div>
          </div>
          <div class="col2-content">
            <h4><a href="#">Green Bean Casserole from Scratch</a></h4>
            <p>Looking for a special holiday side? Here’s a festive</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>