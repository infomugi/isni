  <!--CONTENT END-->
  <footer>
    <div class="container">
      <div class="row">
        <!--TEXT WIDGET START-->
        <div class="col-md-6 col-xs-12">
          <div class="widget widget-text">
            <h2>Tentang Kami</h2>
            <p><?php echo Setting::model()->description(); ?></p>
          </div>
        </div>
        <!--TEXT WIDGET END-->
        <!--CATEGORY WIDGET START-->
        <div class="col-md-3 col-xs-6">
          <div class="widget widget-categories">
            <h2>Galeri</h2>
            <ul>
             <?php foreach (Sub::getLink(13) as $data) { ?> 
              <li>
               <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
             </li>
             <?php } ?> 
           </ul>
         </div>
       </div>
       <!--CATEGORY WIDGET END-->
       <!--CONTACT WIDGET START-->
       <div class="col-md-3 col-xs-6">
        <div class="widget widget-text">
          <h2>Kontak</h2>
          <ul>
            <li><i class="fa fa-build"></i><p><?php echo Setting::model()->address(); ?></p></li>
            <li><i class="fa fa-phone"></i><p><?php echo Setting::model()->phone(); ?></p></li>
            <li><i class="fa fa-envelope-o"></i><p><a href="mailto:<?php echo Setting::model()->email(); ?>"><?php echo Setting::model()->email(); ?></a></p></li>
          </ul>
        </div>
      </div>
      <!--CONTACT WIDGET END-->       
    </div>
  </div>
</footer>
<div class="copyrights">
  <div class="container">
    <p>Copyrights © <?php echo date('Y'); ?> - <?php echo Setting::model()->name(); ?>. All Rights Reserved</p>
  </div>
</div>
</div>
