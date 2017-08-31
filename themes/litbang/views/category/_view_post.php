<div class="row"> 
<div class="recipe-row recipe-row-4">
     <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="post-img">
           <a href="<?php echo YII::app()->baseUrl."/article/".$data->url; ?>"><img src="<?php echo YII::app()->baseUrl;?>/image/news/small/<?php echo $data->image; ?>" alt="<?php echo $data->title; ?>"></a>
           <div class="post-img-content">
              <h5>
                 <span><?php echo $data->Category->name; ?></span>
                 <span><?php echo $data->created_date; ?></span>
             </h5>
         </div>
     </div>
 </div>
 <div class="col-md-9 col-sm-6 col-xs-12">
    <div class="cpost-v2-right">
       <div class="post-header">
          <h2><a href="<?php echo YII::app()->baseUrl."/article/".$data->url; ?>"><?php echo $data->title; ?></a></h2>
      </div>
      <div class="post-entry">
          <p>
            <?php echo $data->keyword; ?>
          </p>
      </div>
 </div>
</div>
</div>
</div>
<HR>