            <header class="header header-fixed navbar">
                <div class="brand">
                    <a href="<?php echo $url;?>site/dashboard" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                    <a href="<?php echo $url;?>site/dashboard" class="navbar-brand text-white">
                        <i class="fa fa-home mg-r-sm"></i>
                        <span class="heading-font">
                           <?php echo CHtml::encode(Setting::model()->name()); ?>
                       </span>
                   </a>
               </div>
               <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="<?php echo $url; ?>site/index" target="_BLANK" title="View Site">
                        <i class="fa fa-desktop"></i> Lihat Situs
                    </a>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown">
                        Akun
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="<?php echo $url;?>account/user/profile"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo $url;?>account/user/edit"><i class="fa fa-edit"></i> Edit</a>
                        </li>  
                        <li>
                            <a href="<?php echo $url;?>account/user/image"><i class="fa fa-image"></i> Avatar</a>
                        </li>  
                        <li>
                            <a href="<?php echo $url;?>account/user/password"><i class="fa fa-tasks"></i> Password</a>
                        </li>                                                                        
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $url;?>config/setting/site"><i class="fa fa-cog"></i> Setting</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $url;?>site/logout"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>