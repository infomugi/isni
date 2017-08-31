<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$url = Yii::app()->baseUrl; 
$this->pageTitle='Home';
?>   


<!--BANNER START-->
<div class="kode-banner">
  <ul class="bxslider">
    <?php foreach (Slide::getSlide() as $data) { ?> 
      <li>
        <img src="<?php echo YII::app()->baseUrl;?>/image/slide/big/<?php echo $data['image']; ?>" alt="<?php echo $data['name']; ?>">
        <div class="kode-caption">
          <h2><?php echo $data['name']; ?></h2>
          <p><?php echo $data['description']; ?></p>

          <div class="input-container">
           <?php echo CHtml::beginForm(array('result'), 'get'); ?>

           <input type="text" placeholder="Cari Standard" name="q" value="<?php isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>">
           <button><i class="fa fa-search"></i></button>
           <?php
           echo CHtml::endForm();
           ?>
         </div> 
       </div>
     </li>
     <?php } ?>

   </ul>
 </div>
 <!--BANNER END-->

 <!--BUT NOW START-->
 <section class="buy-template">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo Setting::model()->name(); ?></h2>
        <p><?php echo Setting::model()->description(); ?></p>
      </div>
      <div class="col-md-6">
        <div class="kode-btns">
          <?php if(YII::app()->user->isGuest){ ?>
            <a href="<?php echo YII::app()->baseUrl; ?>/sni/new/sni/search">Cari SNI</a>
            <a href="<?php echo YII::app()->baseUrl; ?>/site/registrasi">Registrasi</a>
            <a href="<?php echo YII::app()->baseUrl; ?>/site/masuk">Masuk</a>
            <?php }else{ ?>
              <a href="<?php echo YII::app()->baseUrl; ?>/sni/new/sni/search">Cari SNI</a>
              <a href="<?php echo YII::app()->baseUrl; ?>/site/beranda">Dashboard</a>
              <a href="<?php echo YII::app()->baseUrl; ?>/site/logout">Logout</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--BUT NOW END-->

    <!--BOOK GUIDE SECTION START-->
    <section class="kode-services-section">
      <div class="container">
        <!--SECTION CONTENT START-->
        <div class="section-content">
          <h2>Layanan Sistem Manajemen Standar</h2>
        </div>
        <!--SECTION CONTENT END-->
        <div class="row">
          <?php foreach (Services::getServices() as $data) { ?> 
            <div class="col-md-3 col-xs-6">
              <div class="kode-service">
                <i class="<?php echo $data['icon']; ?>"></i>
                <h3><?php echo $data['name']; ?></h3>

                <a href="<?php echo YII::app()->baseUrl;?><?php echo $data['url']; ?>" class="read-more">Selengkapnya</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!--BOOK GUIDE SECTION END-->

      <!--BOOK GUIDE SECTION START-->
      <section class="kode-services-section">
        <div class="container">
          <!--SECTION CONTENT START-->
          <!--SECTION CONTENT END-->
          <div class="row">

           <!--SECTION CONTENT END-->
           <div class="row">
             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="kode-service-3">
               <i class="fa fa-gift"></i>
               <h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/konsultasi">Konsultasi</a></h3>
               <p>Konsultasi Seputar Standar SNI, Petunjuk Teknis dan Pedoman Teknis</p>
             </div>
           </div>
           <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="kode-service-3">
             <i class="fa fa-book"></i>
             <h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/bukutamu">Buku Tamu</a></h3>
             <p>Layanan Feedback untuk Sistem Informasi Manajemen Standar.</p>
           </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="kode-service-3">
           <i class="fa fa-calculator"></i>
           <h3><a href="<?php echo YII::app()->baseUrl; ?>/aplikasi/kuesioner">Kuesioner</a></h3>
           <p>Layanan Kuesioner untuk Sistem Informasi Manajemen Standar.</p>
         </div>
       </div>
     </div>

   </div>
 </div>
</section>
<!--BOOK GUIDE SECTION END-->

<!--CONTENT END-->
<footer>
  <div class="container">
    <div class="row">
      <!--CATEGORY WIDGET START-->
      <div class="col-md-3">
        <div class="widget widget-categories">
          <h2>NSPM</h2>
          <ul>
           <?php foreach (Sub::getLink(9) as $data) { ?> 
            <li>
             <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
           </li>
           <?php } ?> 
         </ul>
       </div>
     </div>
     <!--CATEGORY WIDGET END-->

     <!--CATEGORY WIDGET START-->
     <div class="col-md-3">
      <div class="widget widget-categories">
        <h2>Perumusan Standar</h2>
        <ul>
         <?php foreach (Sub::getLink(10) as $data) { ?> 
          <li>
           <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
         </li>
         <?php } ?> 
       </ul>
     </div>
   </div>
   <!--CATEGORY WIDGET END-->

   <!--CATEGORY WIDGET START-->
   <div class="col-md-3">
    <div class="widget widget-categories">
      <h2>Pemasyarakatan Standar</h2>
      <ul>
       <?php foreach (Sub::getLink(11) as $data) { ?> 
        <li>
         <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
       </li>
       <?php } ?> 
     </ul>
   </div>
 </div>
 <!--CATEGORY WIDGET END-->

 <!--CATEGORY WIDGET START-->
 <div class="col-md-3">
  <div class="widget widget-categories">
    <h2>Penerapan Standar</h2>
    <ul>
     <?php foreach (Sub::getLink(12) as $data) { ?> 
      <li>
       <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
     </li>
     <?php } ?> 
   </ul>
 </div>
</div>
<!--CATEGORY WIDGET END-->

</div>
</div>
</footer>


<!--TOP SELLERS SECTION START-->
<section class="gray-bg kode-best-sellter-sec">
  <div class="container">
    <!--SECTION CONTENT START-->
    <div class="section-content">
      <h2>SPM Terpopuler</h2>
    </div>
    <!--SECTION CONTENT END-->
    <div class="row">
      <!--PRODUCT GRID START-->
      <?php foreach (Sni::getPopular() as $data) { ?> 
        <div class="col-md-3 col-xs-6">
          <div class="best-seller-pro">
            <figure>
              <img src="<?php echo $baseUrl;?>/frontend/images/book5.png" alt="">
            </figure>
            <div class="kode-text hidden-xs">
              <h3><?php echo ucwords($data['judul']); ?></h3>
            </div>
            <div class="kode-caption">
              <h3><?php echo $data['no_nspm']; ?></h3>
              <p><?php echo ucwords($data['judul']); ?></p>
              <a class="add-to-cart" href="<?php echo YII::app()->baseUrl; ?>/sni/new/sni/detail/id/<?php echo $data['id_standar']; ?>"/><?php echo "<i title='Detail ".$data['no_nspm']."' class='btn btn-warning btn-sm fa fa-file-o'></i>"; ?></a>
            </div>
          </div>
        </div>
        <!--PRODUCT GRID END-->
        <?php } ?>
      </div>  
    </div>
  </section>
  <!--TOP SELLERS SECTION END-->
  <!--VIDEO SECTION START-->
  <section class="kode-video-section">
    <div class="container">
      <h2>Video Terbaru</h2>

      <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view_video',
        )); ?>

      </div>
    </section>
    <!--VIDEO SECTION END-->
    <!--BEST SELLER SLIDER SECTION START-->

    <!--FROM THE BLOG SECTION START-->
    <section class="kode-blog-section">
      <div class="container">
        <!--SECTION HEADING START-->
        <div class="section-content">
          <h2>Agenda Kegiatan</h2>
        </div>
        <!--SECTION HEADING END-->
        <div class="row">

         <?php $this->widget('zii.widgets.CListView', array(
          'dataProvider'=>$dataEvent,
          'itemView'=>'_view_event',
          )); ?>

        </div>
      </div>
    </section>
    <!--FROM THE BLOG SECTION END-->
