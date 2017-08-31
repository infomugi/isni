<!--BLOG LIST START-->
<div class="col-md-6 col-xs-12">
  <div class="kode-blog-list">
    <div class="kode-thumb col-md-6 col-xs-12">
      <a href="#"><img src="<?php echo YII::app()->baseUrl;?>/image/event/middle/<?php echo $data->image; ?>" alt="<?php echo $data->name; ?>" title="<?php echo $data->name; ?>"></a>
      <div class="blog-date">
        <p><?php echo date('d', strtotime($data->start_date)); ?></p>
        <span><?php echo date('M', strtotime($data->start_date)); ?></span>
      </div>
    </div>
    <div class="kode-text">
      <h2><?php echo $data->name; ?></h2>
      <p><?php echo $data->location; ?></p>
      <a href="<?php echo YII::app()->baseUrl;?>/site/event/id/<?php echo $data->id_event; ?>" class="more">SEE MORE</a>
    </div>
  </div>
</div>
<!--BLOG LIST END-->