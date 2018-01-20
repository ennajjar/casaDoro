<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$url_en = pll_home_url('en');
$url_ar =  pll_home_url('ar');


//$url_ar =  "#";
   
?>
<head>

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Casa D'Oro">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,400,400i,700,700i">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.png" type="<?php echo esc_url( get_template_directory_uri() ); ?>/image/x-icon" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.png" type="image/x-icon" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- // LOADING -->
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-dark.png" alt="images">
            </div>
            
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <!-- // END LOADING -->
    <!-- BEGIN popup  -->
    <!-- <div class="popup-content">
        <div class="popup-content-wrapper">
            <div class="popup-container">
                <div class="col-md-7 col-sm-6 images">
                    <img class="img-responsive" src="img/newsletter1.jpg" alt="newsletter">
                </div>
                <div class="col-md-5 col-sm-6 text">
                    <div class="popup-content-text">
                        <a href="#" class="close-popup"><i class="fa">x</i></a>
                        <h3>Get Newletter</h3>
                        <p>Subscribe newsletter for exclusive content and all of the behind the scenes details.</p>
                    </div>
                    <div class="newletter-form">
                        <div class="widget_wysija_cont shortcode_wysija">
                            <div class="wysija-msg ajax" id="msg-form-wysija-shortcode57bd06004b338-1"></div>
                            <form class="widget_wysija shortcode_wysija" action="#wysija" method="post">
                                <p class="wysija-paragraph">
                                    <input type="text" value="" name="adress" placeholder="Your Email Address">
                                </p>
                                <button type="submit" value="Subscribe!" class="wysija-submit wysija-submit-field button button1 hover-white">Subscribe<i class="link-icon-white"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End popup  -->    
    <!-- Begin HEADER -->
    <header id="header" class="awe-menubar-header header-style-1">
        <div id="topbar">
            <div class="container">
                <div class="text-left">
                    <p><?php _e('Call us','casaDoro');?> : <span class="color">00 (971) 508-587-329</span></p>
                    <p><a href="mailto:contact@casadoro.com" title="contact@casadoro.com">contact@casadoro.com</a></p>
                </div>
                <!-- End text-left -->
                <div class="text-right">
                    <ul class="navbar-icons">
                        <li class="menubar-account">
                            <a href="/my-account/" title="" class="awemenu-icon">
                                <span><?php _e('Account','casaDoro');?> </span>
                            </a>
                             <?php
                             if ( is_user_logged_in() ) {
                               $user = wp_get_current_user();
                                if ( $user ) :?>
                            <ul class="submenu megamenu">
                                <li>
                                    <div class="container-fluid">
                                        <div class="header-account">
                                            <div class="header-account-avatar">
                                                    <a href="#" title="">
                                                     <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="<?php echo $user->user_firstname.' '.$user->user_lastname; ?>" class="img-circle"/>
                                                    </a>
                                               
                                            </div>

                                            <div class="header-account-username">
                                                <h4><a href="#" title="<?php echo $user->user_firstname.' '.$user->user_lastname; ?>"><?php echo $user->user_firstname.' '.$user->user_lastname; ?> </a></h4>
                                            </div>

                                            <ul>
                                                <li><a href="/my-account/" title="<?php _e('Account Infomation','casaDoro');?> "><?php _e('Account Infomation','casaDoro');?> </a></li>
                                                <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>"><?php _e('Logout','casaDoro');?> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                             <?php endif; ?> <?php } ?>
                        </li>
                        <li>
                            <a class="awemenu-icon" href="/wishlist/" title="<?php _e('Wishlist','casaDoro');?>"><span><?php _e('Wishlist','casaDoro');?></span></a>
                        </li>
                        <li>
                            <?php dynamic_sidebar( 'price' ); ?>
                        </li>
                     <!--    <li class="c-price">
                           
                            <a href="#" title="" class="awemenu-icon">
                                <span>Price : </span><span class="active"><?php /*echo get_woocommerce_currency();?></span>
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <div class="container-fluid">
                                        <div class="header-account">
                                            <ul>
                                                <li><a href="<?php echo  $current_url;?>?currency=USD" title="USD" <?php echo (get_woocommerce_currency()=='USD') ? 'active':'' ?>>USD</a></li>
                                                <li><a href="<?php echo  $current_url;?>?currency=AED" title="AED" <?php echo (get_woocommerce_currency()=='AED') ? 'active':'' */?>>AED</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
    
                        <li class="menubar-account c-lng">
                            <a href="#" title="" class="awemenu-icon">
                                <span><?php _e('Language :','casaDoro');?> </span><span class="active"><?php echo (pll_current_language()=='en') ? 'ENG' :'AR' ?></span>
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <div class="container-fluid">
                                        <div class="header-account">
                                            <?php
                        $menuMain = array(
                          'menu'            => 'Language switcher',
                          'items_wrap'      => ' <ul class="">%3$s</ul>',
                        );
                        wp_nav_menu( $menuMain );
                    ?>

                                          <!--   <ul>
                                                 <li><a href="<?php echo $url_en ?>" title="English" class="<?php echo (pll_current_language()=='en') ? 'active':'' ?>">English</a></li>
                                                <li><a href="<?php echo $url_ar ?>" title="Arabic" class="<?php echo (pll_current_language()=='ar') ? 'active':'' ?>">Arabic</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- BEGIN MENU HEADER -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-relative">
                    <nav class="navtop">
                        <div class="awe-logo">
                            <a href="<?php bloginfo('home'); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt=""></a>
                        </div>
                        <?php echo do_shortcode( '[wpmenucart]' );?>
                        <div class="search-form open" id="search-form">
                       <form action="./home.html" method="GET">
                                    <input type="text" name="s" class="form-control" placeholder="<?php _e('Search your entry here...','casaDoro');?>">
                                    <span class="icon icon-search"></span>
                                </form>
                            </div><!-- /.menubar-search-form -->
                        </div><!-- /.menubar-search-form -->
                    </nav>
                </div>
            </div>
        </div>
        <!-- END MENU HEADER -->
        <nav class="awemenu-nav" data-responsive-width="1200">
            <div class="container">
                <div class="awemenu-container">
                    <div class="awe-logo logo-mobile">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt=""></a>
                    </div><!-- /.awe-logo -->

                    <?php
                        $menuMain = array(
                          'menu'            => 'Menu Principal en',
                          'items_wrap'      => ' <ul class="awemenu awemenu-left">%3$s</ul>',
                        );
                        wp_nav_menu( $menuMain );
                    ?>
                </div>
            </div><!-- /.container -->
        </nav><!-- /.awe-menubar -->
    </header><!-- /.awe-menubar-header -->
    <!-- END HEADER -->