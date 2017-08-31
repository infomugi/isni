<!--WRAPPER START-->
<div class="wrapper kode-home-page">
  <!--HEADER START-->
  <header>
    <div class="top-strip hidden-xs">
      <div class="container">
        <div class="site-info">
          <ul>
            <?php if(YII::app()->user->isGuest){ ?>
              <li><a href="mailto:<?php echo Setting::model()->email(); ?>"><i class="fa fa-envelope-o"></i><?php echo Setting::model()->email(); ?></a></li>
              <li><a href="tel:<?php echo Setting::model()->phone(); ?>"><i class="fa fa-phone"></i><?php echo Setting::model()->phone(); ?></a></li>
              <li><a href="<?php echo $url;?>/site/login"><i class="fa fa-lock"></i></a></li>
              <?php }else{ ?>
                <li><a href="<?php echo $url;?>/site/beranda"><i class="fa fa-dashboard"></i>Beranda</a></li>
                <li><a href="<?php echo $url;?>/aplikasi/konsultasi"><i class="fa fa-info"></i>Konsultasi</a></li>
                <li><a href="<?php echo $url;?>/aplikasi/history"><i class="fa fa-archive"></i>Riwayat</a></li>
                <li><a href="<?php echo $url;?>/site/profile"><i class="fa fa-edit"></i>Edit Profile</a></li>
                <li><a href="<?php echo $url;?>/site/password"><i class="fa fa-lock"></i>Edit Password</a></li>
                <li><a href="<?php echo $url;?>/site/keluar"><i class="fa fa-power-off"></i>Logout</a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div> 

        <div class="overlay"></div>
        <div class="logo-container">
          <div class="container">
            <!--LOGO START-->
            <div class="logo">
              <img src="<?php echo $baseUrl;?>/frontend/images/logo.png" class="img-responsive" alt="<?php echo Setting::model()->name(); ?>" title="<?php echo Setting::model()->name(); ?>">
            </div>
            <!--LOGO END-->
            <div class="kode-navigation">
              <ul>
               <?php foreach (Link::getLink(4) as $data) { ?> 
                <li>
                 <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
               </li>
               <?php } ?> 
             </ul>
           </div>
           <div id="kode-responsive-navigation" class="dl-menuwrapper">
            <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">

             <?php foreach (Link::getLink(4) as $data) { ?> 
               <li class="menu-item kode-parent-menu last">
                 <a href="<?php echo YII::app()->baseUrl.$data['url']; ?>"><?php echo $data['name']; ?></a>
                 <ul class="dl-submenu">
                   <?php foreach (Sub::getLink($data['id_link']) as $sub) { ?> 
                    <li><a href="<?php echo YII::app()->baseUrl.$sub['url']; ?>"><?php echo $sub['name']; ?></a></li>
                    <?php } ?> 
                  </ul>
                </li>
                <?php } ?> 
              </ul>
            </div>
          </div>
        </div>
      </header>
    <!--HEADER END-->